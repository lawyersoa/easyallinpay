<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\ResponseSignedValue;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use EasyAllInPay\Kernel\Exceptions\ResponseException;
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\Member\GetMemberInfo;
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\Member\PersonalMemberInfo;
use ReflectionClass;
use ReflectionException;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use function EasyAllInPay\dump;

abstract class ResponseSignedValue
{
    /**
     * @param array $response
     * @return $this
     * @throws ReflectionException
     * @throws ResponseException
     */
    public function buildResponse(array $response)
    {
        $reflection = (new ReflectionClass($this));
        $className = $reflection->getName();
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $serializer = new Serializer(
            [new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter, null, new ReflectionExtractor())],
        );
        dump($serializer->denormalize($response, $className, null, [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]));
        $jsonObject = [];
//        $encoders = [new JsonEncoder()];
//        $normalizers = [new ObjectNormalizer()];
//
//        $serializer = new Serializer($normalizers, $encoders);
//        $jsonContent = $serializer->deserialize($response, $className, 'json');
        foreach($response as $propertyName => $propertyValue){
            $propertyName = lcfirst($propertyName);
            if(!$reflection->hasProperty($propertyName)){
                throw new ResponseException("{$className}.{$propertyName} property has not found.");
            }
            $setterMethod = 'set' . ucfirst($propertyName);
            if(!is_callable([$this, $setterMethod])){
                throw new ResponseException("{$className}->{$setterMethod} method has not found.");
            }
            !is_null($propertyValue) && call_user_func([$this, $setterMethod], $propertyValue);
            if(is_array($propertyValue) && $propertyValue){
                $jsonObject[$setterMethod] = $propertyValue;
            }
        }
        //========== 嵌套对象处理 ==========
        //PS: 每个嵌套对象在本文件中单独定义一个响应类进行处理，并在父类setter操作完以后重新触发该类的setter操作
        foreach($jsonObject as $setterMethod => $propertyValue){
            !is_null($propertyValue) && call_user_func([$this, $setterMethod], $propertyValue);
        }
        return $this;
    }

    public function toArray()
    {
        $reflection = (new ReflectionClass($this));
        $className = $reflection->getName();
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $serializer = new Serializer(
            [new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter, null, new ReflectionExtractor())],
        );
        return $serializer->normalize();

    }
}
