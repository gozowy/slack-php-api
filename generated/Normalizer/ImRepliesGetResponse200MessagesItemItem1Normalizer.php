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

class ImRepliesGetResponse200MessagesItemItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ImRepliesGetResponse200MessagesItemItem1' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ImRepliesGetResponse200MessagesItemItem1' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ImRepliesGetResponse200MessagesItemItem1();
        if (\array_key_exists('is_starred', $data) && null !== $data['is_starred']) {
            $object->setIsStarred($data['is_starred']);
        } elseif (\array_key_exists('is_starred', $data) && null === $data['is_starred']) {
            $object->setIsStarred(null);
        }
        if (\array_key_exists('parent_user_id', $data) && null !== $data['parent_user_id']) {
            $object->setParentUserId($data['parent_user_id']);
        } elseif (\array_key_exists('parent_user_id', $data) && null === $data['parent_user_id']) {
            $object->setParentUserId(null);
        }
        if (\array_key_exists('source_team', $data) && null !== $data['source_team']) {
            $object->setSourceTeam($data['source_team']);
        } elseif (\array_key_exists('source_team', $data) && null === $data['source_team']) {
            $object->setSourceTeam(null);
        }
        if (\array_key_exists('team', $data) && null !== $data['team']) {
            $object->setTeam($data['team']);
        } elseif (\array_key_exists('team', $data) && null === $data['team']) {
            $object->setTeam(null);
        }
        if (\array_key_exists('text', $data) && null !== $data['text']) {
            $object->setText($data['text']);
        } elseif (\array_key_exists('text', $data) && null === $data['text']) {
            $object->setText(null);
        }
        if (\array_key_exists('thread_ts', $data) && null !== $data['thread_ts']) {
            $object->setThreadTs($data['thread_ts']);
        } elseif (\array_key_exists('thread_ts', $data) && null === $data['thread_ts']) {
            $object->setThreadTs(null);
        }
        if (\array_key_exists('ts', $data) && null !== $data['ts']) {
            $object->setTs($data['ts']);
        } elseif (\array_key_exists('ts', $data) && null === $data['ts']) {
            $object->setTs(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_profile', $data) && null !== $data['user_profile']) {
            $object->setUserProfile($this->denormalizer->denormalize($data['user_profile'], 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
        } elseif (\array_key_exists('user_profile', $data) && null === $data['user_profile']) {
            $object->setUserProfile(null);
        }
        if (\array_key_exists('user_team', $data) && null !== $data['user_team']) {
            $object->setUserTeam($data['user_team']);
        } elseif (\array_key_exists('user_team', $data) && null === $data['user_team']) {
            $object->setUserTeam(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getIsStarred()) {
            $data['is_starred'] = $object->getIsStarred();
        } else {
            $data['is_starred'] = null;
        }
        if (null !== $object->getParentUserId()) {
            $data['parent_user_id'] = $object->getParentUserId();
        } else {
            $data['parent_user_id'] = null;
        }
        if (null !== $object->getSourceTeam()) {
            $data['source_team'] = $object->getSourceTeam();
        } else {
            $data['source_team'] = null;
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $object->getTeam();
        } else {
            $data['team'] = null;
        }
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        } else {
            $data['text'] = null;
        }
        if (null !== $object->getThreadTs()) {
            $data['thread_ts'] = $object->getThreadTs();
        } else {
            $data['thread_ts'] = null;
        }
        if (null !== $object->getTs()) {
            $data['ts'] = $object->getTs();
        } else {
            $data['ts'] = null;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        } else {
            $data['type'] = null;
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        } else {
            $data['user'] = null;
        }
        if (null !== $object->getUserProfile()) {
            $data['user_profile'] = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        } else {
            $data['user_profile'] = null;
        }
        if (null !== $object->getUserTeam()) {
            $data['user_team'] = $object->getUserTeam();
        } else {
            $data['user_team'] = null;
        }

        return $data;
    }
}
