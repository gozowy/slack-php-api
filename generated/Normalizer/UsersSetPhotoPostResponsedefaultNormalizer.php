<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersSetPhotoPostResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponsedefault' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponsedefault();
        if (\array_key_exists('debug_step', $data) && null !== $data['debug_step']) {
            $object->setDebugStep($data['debug_step']);
        } elseif (\array_key_exists('debug_step', $data) && null === $data['debug_step']) {
            $object->setDebugStep(null);
        }
        if (\array_key_exists('dims', $data) && null !== $data['dims']) {
            $object->setDims($data['dims']);
        } elseif (\array_key_exists('dims', $data) && null === $data['dims']) {
            $object->setDims(null);
        }
        if (\array_key_exists('error', $data) && null !== $data['error']) {
            $object->setError($data['error']);
        } elseif (\array_key_exists('error', $data) && null === $data['error']) {
            $object->setError(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('time_ident', $data) && null !== $data['time_ident']) {
            $object->setTimeIdent($data['time_ident']);
        } elseif (\array_key_exists('time_ident', $data) && null === $data['time_ident']) {
            $object->setTimeIdent(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDebugStep()) {
            $data['debug_step'] = $object->getDebugStep();
        } else {
            $data['debug_step'] = null;
        }
        if (null !== $object->getDims()) {
            $data['dims'] = $object->getDims();
        } else {
            $data['dims'] = null;
        }
        if (null !== $object->getError()) {
            $data['error'] = $object->getError();
        } else {
            $data['error'] = null;
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        } else {
            $data['ok'] = null;
        }
        if (null !== $object->getTimeIdent()) {
            $data['time_ident'] = $object->getTimeIdent();
        } else {
            $data['time_ident'] = null;
        }

        return $data;
    }
}
