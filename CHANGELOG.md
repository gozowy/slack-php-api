# Changes between versions

## 3.0.1 (2020-08-26)

* Use a fixed version of Jane to avoid BC Break

## 3.0.0 (2020-08-19)

* **Massive specification update** to latest Slack official version:
  * adds all the admin* endpoints
  * adds the fileRemote* endpoints
  * adds the views* endpoints
* Add a `bin/slack-api-client-generator` command to help further updates
* Upgrade to JanePHP version 6
* **Breaking** Some options have new types, for example ChatUpdate `as_user` option was a boolean and is now a string

Thanks [@xavierlacot](https://github.com/xavierlacot) for the huge work on those features.

## 2.5.0 (2020-04-29)

* Update specification to latest version (ids are now longer than 8 chars)
* **Specification override** Add missing description for `oauth.token` and `oauth.access`, fix #71
* **Specification override** Add missing `response_metadata` for `channels.list`
* **Specification override** Add a better description completeness of bunch of endpoints

## 2.4.0 (2020-02-24)

* Upgrade JanePHP to v5.3 and PHP 7.2

## 2.3.0 (2019-10-25) Forum PHP edition

* **Specification override** The `usergroups.users.list` was missing parameters, fix #57
* Upgrade JanePHP and add a **Specification override** for file uploads #58

## 2.2.0 (2019-10-09)

* Fix api.test endpoint
* Throw exception when Slack returns error code

## 2.1.1 (2019-10-05)

* Fix PSR-18 client discovery
* Avoid installing HTTPlug in version 1

## 2.1.0 (2019-10-03)

* Generate PSR-18 client instead of HttPlug client

## 2.0.0 (2019-09-16)

* Upgrade Jane to 4.4 https://github.com/janephp/janephp/releases/tag/v4.4.0, the new generated classes have better PHPDoc
* **Massive specification update** from Slack, all the patches have been rewritten and the API wins a lots of changes, new objects, new API. See #45 for more details. We had big issues with polymorphic responses.

## 1.2.0 (2019-04-23)

* **Specification override** Fix Timestamp type in all endpoints, allow string and number because of API inconsistency
* **Specification override** Fix "oldest" and "latest" parameters type, allow string
* **Specification override** Fix "priority" type from integer to float
* **Specification override** Add "id", "callback_id" and "actions" mapping to attachments (in Messages)
* **Specification override** Map the "files" key in Message objects
* **Specification override** Add "blocks" to all the messages API (updates, ephemeral)

## 1.1.3 (2019-03-21)

* **Specification override** Fix Message attachment data

## 1.1.2 (2019-03-21)

* **Specification override** Fix Timestamp type in Chat Update endpoint

## 1.1.1 (2019-03-10)

* Add support for HTTPlug 2

## 1.1 (2019-02-21)

* **Specification override** Add support for Slack Blocks in chat.postMessage and better patch support for specification

## 1.0 (2018-11-15)

* Initial release

