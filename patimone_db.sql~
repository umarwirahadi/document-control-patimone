/*
 Navicat Premium Data Transfer

 Source Server         : LocalDB
 Source Server Type    : MariaDB
 Source Server Version : 110302 (11.3.2-MariaDB)
 Source Host           : localhost:3307
 Source Schema         : patimone_db

 Target Server Type    : MariaDB
 Target Server Version : 101199
 File Encoding         : 65001

 Date: 05/06/2024 17:27:55
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for patimone_assignment_letters
-- ----------------------------
DROP TABLE IF EXISTS `patimone_assignment_letters`;
CREATE TABLE `patimone_assignment_letters`  (
  `id` char(36) NOT NULL,
  `letter_id` char(40) NOT NULL,
  `engineer_id` char(40) NOT NULL,
  `name` varchar(255) NULL DEFAULT NULL,
  `action` varchar(40) NULL DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB;

-- ----------------------------
-- Records of patimone_assignment_letters
-- ----------------------------
BEGIN;
INSERT INTO `patimone_assignment_letters` (`id`, `letter_id`, `engineer_id`, `name`, `action`, `priority`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('1bb1c76d-bf94-49e4-9931-b73105256331', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', 'b47a9195-0c03-47ad-b3e1-cfd48bbae0ae', 'reference', '2', 4, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('3df0db5a-ef7c-43a7-aea6-7f9396e443b8', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', 'be5448ef-405c-47fe-895d-f30989b60982', 'assign', '1', 2, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('42e8ab76-4cce-4156-a521-a1e0ca76ed5a', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', '79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', 'reference', '2', 9, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('457676f8-7ed7-4dbc-a70d-1dbaa2bc64c8', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', '90012eca-0a5e-4ec7-ac5e-f3a04006df25', 'reference', '2', 3, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('562e33d1-ca22-430c-aec2-3b3827d67d8c', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', 'f1aacafd-e7fc-4136-89f5-1c896abd2c79', 'reference', '2', 10, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('736a0671-6636-46be-9116-1943eb2a6db3', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', 'ee289d04-04f0-4af9-a8d0-33627a50025c', 'reference', '2', 5, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('92fc33e9-60a7-47e4-befa-0a4abd795a8c', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', '144656ca-3ea2-4469-b9ec-f56fe13f7815', 'reference', '2', 6, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('a673c70b-630d-440c-90e5-2cc922f74a9f', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', '42f3b046-c24d-47a3-a1c6-f371c17d3b4e', 'assign', '1', 1, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('a8af966d-a4b4-4c85-acf1-c080aae6d9b6', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', '5729c63a-a992-4472-a3b2-6d02bea44428', 'reference', '2', 8, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('aeca6ec2-b7cb-4b33-9f0d-3bda5ba58ad1', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', 'a07d383d-40ba-4fef-9873-48f7ee128c68', 'reference', '2', 2, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('b1c6924e-2ad4-4878-8f6b-1ec790a0f730', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', 'd91b1b3a-7882-4b6c-9356-5ca597a568ec', 'reference', '2', 1, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38'), ('c245efa9-9380-4cc3-8ac4-533c78acd96d', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', '0f1b8674-66d3-442c-8bdf-784af5317bff', 'reference', '2', 7, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:38', '2024-06-05 04:10:38');
COMMIT;

-- ----------------------------
-- Table structure for patimone_assignment_letterss
-- ----------------------------
DROP TABLE IF EXISTS `patimone_assignment_letterss`;
CREATE TABLE `patimone_assignment_letterss`  (
  `id` char(36) NOT NULL,
  `letter_id` char(40) NOT NULL,
  `engineer_id` char(40) NOT NULL,
  `action` varchar(40) NULL DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_assignment_letterss
-- ----------------------------
BEGIN;
INSERT INTO `patimone_assignment_letterss` (`id`, `letter_id`, `engineer_id`, `action`, `priority`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('06d75e8a-b8a2-483d-8411-c194eaed5ce4', '50206bd0-702b-4a67-ab4d-3e46710cc035', 'b47a9195-0c03-47ad-b3e1-cfd48bbae0ae', '2', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-29 09:45:12', '2024-04-29 10:00:05'), ('0751a382-ce43-4711-acd8-5531808e4ad6', 'd54f5365-5101-474a-8d3a-049129d7f609', '92ef6802-2a8c-44eb-8ace-286a7aabda58', '1', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('1225a8c2-6fe9-4010-b525-a1e9cbd0a549', '60414075-ff7a-4add-8299-f25545437edc', '97da0c50-a1ad-4a2f-9645-6c1810d0d2c0', '2', 4, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:56:22', '2024-04-24 10:56:22'), ('1a0743ff-0991-4a7a-bd7f-75a836d2b883', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '5729c63a-a992-4472-a3b2-6d02bea44428', '2', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:06:39', '2024-04-25 09:06:39'), ('2245502b-6df0-4fd7-b721-d444c9f4d0ce', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '68cfc76f-afef-4b0e-bdde-638d61c3b0cc', '1', 3, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 04:35:51', '2024-05-02 04:35:51'), ('2daa2577-b84e-4f69-8294-d6ea2be04ac1', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '70599645-61bf-4ce3-94f3-4a82049865bb', '2', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 04:35:51', '2024-05-02 04:35:51'), ('33905d17-2c6a-4c26-9b1d-05726c6ca38b', 'd54f5365-5101-474a-8d3a-049129d7f609', 'd91b1b3a-7882-4b6c-9356-5ca597a568ec', '2', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('466a094a-3d1f-4b7f-ab88-bd53b7577711', 'd54f5365-5101-474a-8d3a-049129d7f609', '79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', '2', 4, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('492b177d-8344-46c4-8add-8f71c136cb40', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', '2', 3, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 04:35:51', '2024-05-02 04:35:51'), ('4a3db655-d85e-41ff-a4ff-8f659316d743', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '05f94152-78ad-40f2-b4c4-f17479a1fb65', '1', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 04:35:51', '2024-05-02 04:35:51'), ('598cebe1-3222-4e40-80c3-a7e701757c60', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '404acab7-3c57-4cfd-b6dc-52f56c2c61ac', '1', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 04:35:51', '2024-05-02 04:35:51'), ('71960099-cabc-4368-9470-ed90049ead64', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '0a1a92a6-3985-43cf-a63d-3c497355d919', '2', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 04:35:51', '2024-05-02 04:35:51'), ('74df7f25-f2a3-4a7b-bb9d-da5213a2056b', '50206bd0-702b-4a67-ab4d-3e46710cc035', '90012eca-0a5e-4ec7-ac5e-f3a04006df25', '2', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-29 09:45:12', '2024-04-29 10:00:05'), ('7d2d92e2-7953-438f-b734-ce8b342912cb', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '0a1a92a6-3985-43cf-a63d-3c497355d919', '1', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:06:39', '2024-04-25 09:06:39'), ('7d97e48c-6aa5-4b30-a1a7-74bc6cf63da8', 'd54f5365-5101-474a-8d3a-049129d7f609', '841ce06d-97cf-4019-ab78-939a3632df98', '1', 3, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('83816db5-f8e0-4876-8d5c-61ab51c54468', '60414075-ff7a-4add-8299-f25545437edc', '05f94152-78ad-40f2-b4c4-f17479a1fb65', '2', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-24 10:56:22', '2024-04-24 10:56:22'), ('84838e53-d161-416a-9c5a-15de9842161b', 'd54f5365-5101-474a-8d3a-049129d7f609', 'b47a9195-0c03-47ad-b3e1-cfd48bbae0ae', '2', 3, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('8c904267-af47-4507-b371-691972ce43ec', 'd54f5365-5101-474a-8d3a-049129d7f609', 'a07d383d-40ba-4fef-9873-48f7ee128c68', '2', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('8fca84b2-ddb4-4c97-b7b2-6aeac26a8e90', '60414075-ff7a-4add-8299-f25545437edc', '68cfc76f-afef-4b0e-bdde-638d61c3b0cc', '2', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:56:22', '2024-04-24 10:56:22'), ('9baa07f9-ac6d-413c-96b0-8592d2ca5142', 'd54f5365-5101-474a-8d3a-049129d7f609', '144656ca-3ea2-4469-b9ec-f56fe13f7815', '1', 5, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('9f9b3658-56d2-4ded-9c96-89df398d5f2b', 'd54f5365-5101-474a-8d3a-049129d7f609', '90012eca-0a5e-4ec7-ac5e-f3a04006df25', '1', 4, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('a88a859d-f91d-4709-94af-2bdcc4c1a108', '60414075-ff7a-4add-8299-f25545437edc', '70599645-61bf-4ce3-94f3-4a82049865bb', '2', 3, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:56:22', '2024-04-24 10:56:22'), ('beeba626-ddd0-4c09-95df-2d0388462af6', '50206bd0-702b-4a67-ab4d-3e46710cc035', '841ce06d-97cf-4019-ab78-939a3632df98', '1', 1, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-29 09:45:12', '2024-04-29 09:45:12'), ('c0c476f6-40f6-46ac-a9a5-fe5a9818e794', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', 'f7f97e04-6c30-4656-b6f1-6347e6d580cd', '2', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:06:39', '2024-04-25 09:06:39'), ('c7ba9af8-1663-4840-8fe2-3b9cb73ec80b', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '68cfc76f-afef-4b0e-bdde-638d61c3b0cc', '1', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:06:39', '2024-04-25 09:06:39'), ('cb03e592-a9fb-4e6b-835e-07fc0f2e2a05', '60414075-ff7a-4add-8299-f25545437edc', '12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99', '1', 3, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:56:22', '2024-04-24 10:56:22'), ('cb0aff45-c9da-4006-9435-8a8b880e8c51', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '92ef6802-2a8c-44eb-8ace-286a7aabda58', '2', 3, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:06:39', '2024-04-25 09:06:39'), ('d2dcaff1-ad2e-4682-bbb0-cf9132e5ff07', 'd54f5365-5101-474a-8d3a-049129d7f609', 'ee289d04-04f0-4af9-a8d0-33627a50025c', '1', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:08:06', '2024-05-02 13:08:06'), ('dfabc1ba-f7d1-480b-bb75-6851ff929a04', '50206bd0-702b-4a67-ab4d-3e46710cc035', '5729c63a-a992-4472-a3b2-6d02bea44428', '1', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-29 09:45:12', '2024-04-29 09:45:12'), ('e0354c6a-1cae-4314-85a6-6569deb936fb', '60414075-ff7a-4add-8299-f25545437edc', '0f1b8674-66d3-442c-8bdf-784af5317bff', '1', 2, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:56:22', '2024-04-24 10:56:22');
COMMIT;

-- ----------------------------
-- Table structure for patimone_assignments
-- ----------------------------
DROP TABLE IF EXISTS `patimone_assignments`;
CREATE TABLE `patimone_assignments`  (
  `id` char(40) NOT NULL,
  `engineer_id` char(40) NOT NULL,
  `position_id` char(40) NOT NULL,
  `status` varchar(1) NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_assignments
-- ----------------------------
BEGIN;
INSERT INTO `patimone_assignments` (`id`, `engineer_id`, `position_id`, `status`, `created_at`, `updated_at`) VALUES ('05fc1e19-d314-45de-86dd-bf5fd5e236d0', 'ac67bda9-9a59-4e1e-a06e-23c0a143b213', '99aafa6e-4daa-4656-acfd-cd1e8c3e9412', '1', '2024-04-16 12:24:07', '2024-04-16 12:24:07'), ('102eed2f-7721-4dd3-bd5e-3b61c972db26', '42f3b046-c24d-47a3-a1c6-f371c17d3b4e', 'a66b48f0-e0a7-47da-9b56-b28583427c3d', '1', '2024-04-16 11:44:15', '2024-04-16 11:44:15'), ('18074486-27fd-495a-bd8f-79e5328d6b97', '97da0c50-a1ad-4a2f-9645-6c1810d0d2c0', '273dba8a-da7f-497b-89ab-8d3231c86df1', '1', '2024-04-16 12:23:20', '2024-04-16 12:23:20'), ('1c89730a-8105-4ff3-9f7f-9bff9f8a9dd2', '65756126-2a9c-4764-b16b-0274441bc4cf', '2a3ee77b-b716-4f91-ae3e-82f107be92d8', '1', '2024-04-16 11:34:55', '2024-04-16 11:34:55'), ('1fe9011b-84f9-4aad-8ddf-a8017b2cabe8', 'e28bdb09-b8d5-45a9-aad7-d1cd7ffbaa32', 'c3d51c24-22e4-40ec-9172-777c6686b898', '1', '2024-04-16 12:25:25', '2024-04-16 12:25:25'), ('25946398-0bc4-49ab-9986-2d3e58df3588', '90012eca-0a5e-4ec7-ac5e-f3a04006df25', 'b9dac3b4-c631-4860-9edd-9700130a6c1a', '1', '2024-04-16 11:36:49', '2024-04-16 11:36:49'), ('34e02d6e-91a7-480b-8144-fca12071635e', '47a2fa7d-e863-4a66-806b-08f94e9d7bd2', 'e170facb-ca15-4466-88b3-9c5275e6dbc3', '1', '2024-04-16 11:45:08', '2024-04-16 11:45:08'), ('4228cd30-ab81-429d-abf7-4b3d3cbb62e1', 'c7019bb4-c45d-4ecd-bf66-68339e416063', '8aad550f-6732-4633-b890-2bcf24f61e87', '1', '2024-04-16 11:41:21', '2024-04-16 11:41:21'), ('49953cd7-6247-409c-875e-b8680513031f', '68cfc76f-afef-4b0e-bdde-638d61c3b0cc', 'e842b815-a20f-400c-8298-b98184c0451b', '1', '2024-04-16 11:45:26', '2024-04-16 11:45:26'), ('4f38b4ac-0552-4dd5-89bb-1aca28f05116', '0a1a92a6-3985-43cf-a63d-3c497355d919', '588ec0ec-c05e-4f53-a155-1eb183f92425', '1', '2024-04-16 11:33:45', '2024-04-16 11:33:45'), ('50c96d3d-5b31-406d-99a0-4d5bdcf42e27', 'e4b5dd53-d721-426d-963e-3114e883b377', '5e3d8f86-cd64-40aa-93e8-d20069a74e8d', '1', '2024-04-16 12:25:40', '2024-04-16 12:25:40'), ('558e00cf-781a-47f8-b0f6-d2d57d9e1110', '530b6b77-8009-4f00-ac83-469f77eacebd', '356ed621-4e2a-496c-91c6-3b12c0835577', '1', '2024-04-16 11:36:06', '2024-04-16 11:36:06'), ('57f53dfb-6ee4-4318-a789-2eee6879f4e5', 'c2f5e0e9-895e-4e0f-b23e-c69ac86821ef', 'aaaf7b92-63fa-4579-9028-283f7582f05e', '1', '2024-04-16 11:42:07', '2024-04-16 11:42:07'), ('5d081f4f-af3e-4447-b0df-cfd0a164335e', '79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', 'e0a03917-2ee4-4dfa-bd1e-7815a37bd581', '1', '2024-04-16 11:46:22', '2024-04-16 11:46:22'), ('61678d3c-3272-46cc-8c59-4d5620cf1c67', '5cb3687f-3c3d-4175-ac0c-9f1feb795a51', '9f984858-e504-4b23-bf9e-9ff94787dd10', '1', '2024-04-16 11:37:10', '2024-04-16 11:37:10'), ('63171ce6-3bc0-42fe-90b5-e59cd8583ff4', 'f00d55f6-6974-43d8-84ac-1a9cd1a4bdcd', '9c5f18f3-30b1-4de6-95b0-e595eeb29ac1', '1', '2024-04-16 12:26:16', '2024-04-16 12:26:16'), ('6522734e-a6de-4ac4-afda-2616eb6d5de1', 'f1aacafd-e7fc-4136-89f5-1c896abd2c79', '245fb955-5102-4ebc-ab82-caa24e44e4f3', '1', '2024-04-16 12:26:27', '2024-04-16 12:26:27'), ('682ae1f1-d57b-4c94-ace1-1eec6c28f23a', '05f94152-78ad-40f2-b4c4-f17479a1fb65', 'c3d51c24-22e4-40ec-9172-777c6686b898', '1', '2024-04-16 12:24:58', '2024-04-16 12:24:58'), ('6c7a65a4-870c-4dea-988e-cda9092b0b45', '8fe19a15-80b3-4c41-8e28-832af759d425', '5b507bf5-1f34-408b-b31d-f32e6f0c855a', '1', '2024-04-16 12:23:01', '2024-04-16 12:23:01'), ('74fea6d9-3518-4b20-8a48-0cf0804b6ffe', 'fb5ccff4-aa40-463f-ab46-099d6dd5e279', 'd60749a6-9f9a-4321-a9cc-50c882ec716c', '1', '2024-04-16 12:26:55', '2024-04-16 12:26:55'), ('78909c40-7754-4ee3-98b6-171674277604', '5729c63a-a992-4472-a3b2-6d02bea44428', 'fec3046f-5c04-4478-b921-c8a7a12376ec', '1', '2024-04-16 12:21:21', '2024-04-16 12:21:21'), ('7f0f2225-e071-48db-aa1b-0fc360679c18', '9a127c07-d963-465c-8cca-d49f56d1f791', '3b96ff75-8494-40f4-a658-a25403fcecb0', '1', '2024-04-16 11:35:54', '2024-04-16 11:35:54'), ('84232349-68cf-47f4-8872-a7db815b7525', '127f20d7-b223-4419-9d2f-00966ef2e275', '7df73d38-3640-4782-b889-c2278694df2c', '1', '2024-04-16 10:37:25', '2024-04-16 10:37:25'), ('8a3eae86-5045-4a52-9add-e7ddcb2aea74', 'cda42281-3e61-4988-9d83-26d3b19718e2', '003b3ac6-5e00-4581-80cf-5a87f1eff02a', '1', '2024-04-16 11:41:35', '2024-04-16 11:41:35'), ('9073c557-93dd-4ecd-96f1-6d12680060fd', 'a07d383d-40ba-4fef-9873-48f7ee128c68', 'ed082fc9-0487-4663-a0df-c6ee6af74989', '1', '2024-04-16 11:36:39', '2024-04-16 11:36:39'), ('92e61d1c-aafd-4e16-87f1-3441b71c8e62', 'ee289d04-04f0-4af9-a8d0-33627a50025c', '5c6d279b-b312-4101-8316-98d6d5284a0f', '1', '2024-04-17 02:58:13', '2024-04-17 02:58:13'), ('984e0a1f-7fb4-4de1-b6cb-8fae9f3baeff', 'a93812ed-85cd-4275-be7b-8d578bb99354', '5f1a3a87-42a2-48b6-8d08-0445d0a4b8ed', '1', '2024-04-16 11:35:42', '2024-04-16 11:35:42'), ('9e72d07f-be93-4bfa-bc56-18cfcca043dc', 'f7f97e04-6c30-4656-b6f1-6347e6d580cd', 'ae348858-fb0b-4be2-9ecb-4beea1354871', '1', '2024-04-16 12:26:44', '2024-04-16 12:26:44'), ('a39d85ca-c329-4345-b9ba-a2401bff4b3d', '8ece5de4-70c9-4fd9-b35d-5c2d6d02cc43', 'c19f8aa6-de99-45df-971c-52268184ef88', '1', '2024-04-16 11:35:34', '2024-04-16 11:35:34'), ('a733372e-d76c-4c15-864f-9a6f6efbb5c2', '127f20d7-b223-4419-9d2f-00966ef2e275', 'b9dac3b4-c631-4860-9edd-9700130a6c1a', '1', '2024-04-16 11:22:29', '2024-04-16 11:22:29'), ('a74bfef4-5680-471f-8651-e74bf7dfe93a', 'be5448ef-405c-47fe-895d-f30989b60982', '3d3f2cdc-cf4b-444f-9ffc-5fa30c2d963c', '1', '2024-04-16 12:24:30', '2024-04-16 12:24:30'), ('c2065c30-1319-453a-b14e-dfeebc06fdcc', '70599645-61bf-4ce3-94f3-4a82049865bb', '3d3397ae-7e33-47a1-8e1d-7116cde65d48', '1', '2024-04-16 12:21:45', '2024-04-16 12:21:45'), ('c79298ac-cc0c-4f15-a119-b107c3619e0f', '841ce06d-97cf-4019-ab78-939a3632df98', 'aed77c91-9294-4649-b621-7bda68328706', '1', '2024-04-16 12:22:20', '2024-04-16 12:22:20'), ('cb82340e-4c6a-404d-a2ab-da61055f9107', '144656ca-3ea2-4469-b9ec-f56fe13f7815', '79efa929-83e5-4504-a1c1-dcad3b252bf9', '1', '2024-04-16 11:23:18', '2024-04-16 11:23:18'), ('cd955dff-bc03-473a-baaf-79d8de4a164d', '92ef6802-2a8c-44eb-8ace-286a7aabda58', '83687428-04bc-452a-9898-6227c0c039dc', '1', '2024-04-16 12:23:38', '2024-04-16 12:23:38'), ('d22d8f09-1294-487e-b7c1-7bc1f8d03da6', 'd700833b-4be5-495e-bc24-eaeaf108bc73', '8f29139d-f8d1-4b3d-8b88-43133acd29ce', '1', '2024-04-16 12:24:45', '2024-04-16 12:24:45'), ('d7a6acb0-efe2-470d-be74-bb59d4bf7395', 'c3f715bc-ade5-423f-bcc9-e5a40e365705', '296e6ecb-b2bb-46c5-8f9c-1c654c21c1ce', '1', '2024-04-16 11:41:57', '2024-04-16 11:41:57'), ('e2b37c3b-6fcf-4359-a117-1d27a6a30666', 'cc282b3f-18c9-4cb0-936d-a0a12c6c09dc', '43397b79-4e57-4b91-b5a6-64f4f8d6dfaf', '1', '2024-04-16 11:41:46', '2024-04-16 11:41:46'), ('e547e531-6602-4603-887a-202fc9dff1f5', '12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99', '74f873a2-dfc2-418a-920d-cfb87d9c3de6', '1', '2024-04-16 11:34:37', '2024-04-16 11:34:37'), ('f1b6efae-c4bd-48df-84f4-779315a7cbf3', 'd91b1b3a-7882-4b6c-9356-5ca597a568ec', 'f248e608-3cb4-4a05-ba2b-c5aded25f562', '1', '2024-04-16 11:36:56', '2024-04-16 11:36:56'), ('f21cb166-b3fb-45eb-908a-7d6c73a555a4', '0f1b8674-66d3-442c-8bdf-784af5317bff', '46682c45-81dc-44d1-87a6-80b078cc7ea5', '1', '2024-04-16 11:35:16', '2024-04-16 11:35:16'), ('f3f6e4aa-096d-49a4-9d35-123d15fdff14', 'b47a9195-0c03-47ad-b3e1-cfd48bbae0ae', '1fbf031a-f214-4072-96d0-e159a7a1d41e', '1', '2024-04-16 11:37:39', '2024-04-16 11:37:39'), ('f6926c9f-f29a-4a27-bb91-8e4f62560dae', '404acab7-3c57-4cfd-b6dc-52f56c2c61ac', 'da919b85-616d-418f-a79e-20968093fdcb', '1', '2024-04-16 11:34:22', '2024-04-16 11:34:22'), ('fe155e34-d442-4f88-b4d2-38e6d8daf91e', '127f20d7-b223-4419-9d2f-00966ef2e275', 'de6b10dc-fb5a-4c49-b69b-871c0282171e', '1', '2024-04-16 10:32:12', '2024-04-16 10:32:12');
COMMIT;

-- ----------------------------
-- Table structure for patimone_attachment_files
-- ----------------------------
DROP TABLE IF EXISTS `patimone_attachment_files`;
CREATE TABLE `patimone_attachment_files`  (
  `id` char(36) NOT NULL,
  `letter_id` char(40) NOT NULL,
  `document_type_id` char(40) NULL DEFAULT NULL,
  `file_name` text NOT NULL,
  `file_link1` text NULL DEFAULT NULL,
  `file_link2` text NULL DEFAULT NULL,
  `file_link3` text NULL DEFAULT NULL,
  `type` varchar(100) NULL DEFAULT NULL,
  `description` varchar(255) NULL DEFAULT NULL,
  `tags` varchar(255) NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_attachment_files_letter_id_index`(`letter_id`) USING BTREE,
  INDEX `file_name`(`file_name`(768)) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_attachment_files
-- ----------------------------
BEGIN;
INSERT INTO `patimone_attachment_files` (`id`, `letter_id`, `document_type_id`, `file_name`, `file_link1`, `file_link2`, `file_link3`, `type`, `description`, `tags`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('2b9432f7-3821-4ae2-aef1-2161fff5ab4b', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '7d496eb3-1132-452c-ba28-bc1b1e96e8a9', 'PKG6-GEN-SI-SD-100-002-003 R1', 'https://cloud.patimoneconsul.id:8081/sharing/8aGW4FB0g', 'https://cloud.patimoneconsul.id:8081/sharing/HoUvLh9K3', NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 12:19:07', '2024-05-02 12:19:07'), ('30f68857-7997-446f-8370-1f94fb873a4d', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '0fd59fae-2e4e-4c5a-96ba-652a8beaed81', 'Material Approval for Cement', 'https://cloud.patimoneconsul.id:8081/sharing/dRtlSwRsQ', 'https://cloud.patimoneconsul.id:8081/sharing/tkZpUNMZ6', '', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 10:25:13', '2024-05-02 10:25:13'), ('459862ae-6b87-4f23-b619-68e5daeffd06', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '7d496eb3-1132-452c-ba28-bc1b1e96e8a9', 'PKG6-GEN-SI-SD-100-002-003 R1', 'https://cloud.patimoneconsul.id:8081/sharing/8aGW4FB0g', 'https://cloud.patimoneconsul.id:8081/sharing/HoUvLh9K3', NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-05-02 12:21:38', '2024-05-02 12:18:54', '2024-05-02 12:21:38'), ('660d9f67-6e17-4513-8a6b-1c012c7ca37f', 'd54f5365-5101-474a-8d3a-049129d7f609', '7d496eb3-1132-452c-ba28-bc1b1e96e8a9', '<p>PKG6-CBT-STR-SD-800-001~PKG6-CBT-STR-SD-800-040</p>', 'https://cloud.patimoneconsul.id:8081/sharing/ZxhGDDdB2', 'https://cloud.patimoneconsul.id:8081/sharing/SzYMol4a0', NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:07:44', '2024-05-02 13:07:44'), ('9a7f80dc-e87e-4d6b-bb0c-d32a4f70a180', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', 'e3b3494e-25fa-4fb3-84a1-5cb714e41742', 'PTRPWJ-PTBP6-ENGR-23-T-0012 - Method Statement (MS) for Topographic & Hydrographic Survey', 'https://cloud.patimoneconsul.id:8081/sharing/hbFvFFs9x', 'https://cloud.patimoneconsul.id:8081/sharing/9UjeySaSD', NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 11:42:36', '2024-05-02 11:42:36'), ('a59e9514-d297-4555-b294-b3c307a0c7f9', '9821a3a8-3f5d-45e4-9451-61ca13c6a010', 'ca70f9c6-ee76-42ef-b9ed-9b430722fa85', '<p>PTBP6-T-0277c - Final Report of Field Trial for Cement Deep Mixing (CDM), Rev. 3</p>', 'file://10.200.170.252/13%20Package%206/01%20CORRESPONDENCE/11%20TRANSMITTAL/2024/6%20-%20June/PTBP6-T-0277c%20-%20Final%20Report%20of%20Field%20Trial%20for%20Cement%20Deep%20Mixing%20(CDM),%20Rev.%203.pdf', NULL, NULL, NULL, NULL, NULL, '1', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 04:10:26', '2024-06-05 04:10:26');
COMMIT;

-- ----------------------------
-- Table structure for patimone_contacts
-- ----------------------------
DROP TABLE IF EXISTS `patimone_contacts`;
CREATE TABLE `patimone_contacts`  (
  `id` char(36) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NULL DEFAULT NULL,
  `phone_1` varchar(30) NOT NULL,
  `phone_2` varchar(30) NULL DEFAULT NULL,
  `primary_email` varchar(255) NOT NULL,
  `secondary_email` varchar(255) NULL DEFAULT NULL,
  `position_id` varchar(255) NOT NULL,
  `profile` varchar(255) NULL DEFAULT NULL,
  `type` enum('contractor','subcontractor','engineer','employeer') NOT NULL DEFAULT 'contractor',
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_contacts_first_name_phone_1_primary_email_index`(`first_name`, `phone_1`, `primary_email`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_contacts
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_correspondence_types
-- ----------------------------
DROP TABLE IF EXISTS `patimone_correspondence_types`;
CREATE TABLE `patimone_correspondence_types`  (
  `id` char(36) NOT NULL,
  `correspondence_type` varchar(255) NOT NULL,
  `content_template` varchar(255) NULL DEFAULT NULL,
  `description` text NULL DEFAULT NULL,
  `type` enum('IN','OUT') NOT NULL DEFAULT 'IN',
  `package_id` varchar(255) NOT NULL COMMENT 'refer to table package',
  `to_attention` varchar(255) NULL DEFAULT NULL COMMENT 'for attention',
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NULL DEFAULT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_correspondence_types
-- ----------------------------
BEGIN;
INSERT INTO `patimone_correspondence_types` (`id`, `correspondence_type`, `content_template`, `description`, `type`, `package_id`, `to_attention`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('061838de-218b-49be-bdf4-d8ace6bfb41d', 'Letter to Other', 'PTRPWJ/PTBP6/OTH/YY/L-NO', '<p>Letter to Other</p>', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', '', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 07:25:08'), ('088f766c-8349-4b54-b41d-30c693a1b3fe', 'L to CTR', NULL, NULL, 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-04 03:02:02', '2024-04-04 03:02:02'), ('0a01c6eb-5aad-4bf9-a36c-251cf55d9d0d', 'T to PMU-P5', 'TWWHA-PTBP5/DGST/YY/T-NO', 'Letter to the Contractor', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('0f9ee80e-1290-4602-af27-ff744b0bda65', 'PMU-P5 to Engineer', 'fill manually', '<p>PMU to Engineer</p>', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:02:06'), ('1a160d58-cde4-48fc-933e-f421ea2f9f7f', 'Transmittal', 'TWWHA-PTBP5/ENGR/YY/T-NO', '<p>Transmittal document</p>', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:02:17'), ('1a9d095a-53b5-454a-8797-4c8e07242b50', 'CRSI', 'PTBP5/ENGR/CRSI/NO', 'CRSI', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('24e79b81-11d2-4169-8886-d392a79a99ac', 'CLR', 'TWWHA-PTBP5/CLR/NO', 'CLR', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('2f7e7ac2-718d-4d49-a38a-ee377b6da982', 'WPR to KSOP', 'TWWHA/PTBP5/KSOP/WPR-NO', 'Weekly progress report to KSOP', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'KSOP', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('349f9391-1bda-4e0a-80e1-9da3c85b46d6', 'CRPN', 'PTBP5/ENGR/CRPN/NO', 'CRPN', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('3c466384-5709-459f-b476-f062edc8fd63', 'CRNCR', 'PTBP5/ENGR/CRNCR/NO', 'CRNCR', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('44ece0fb-789a-4895-8dcb-cefcdf23fab7', 'Letter to KSOP', 'PTRPWJ/PTBP6/KSOP/YY/L-NO', '<p>Letter to KSOP</p>', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 07:25:32'), ('4b58e621-45ff-4e80-a9b2-2e034f5d742a', 'Letter to Engineer', 'TWWHA-PTBP5/ENGR/YY/L-NO', '<p>Letter to Engineer</p>', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 07:25:46'), ('61b90233-dab3-45be-8891-c62a448a50a7', 'Letter to PMU-P5', 'TWWHA-PTBP5/DGST/YY/L-NO', '<p>letter to PMU P5</p>', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PMU-P5', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 09:02:38'), ('71eda357-773d-4ae4-974a-7704b270c43d', 'RFCI', 'PTRPWJ/PTBP6/RFCI/NO', 'Request for Clarification/Information', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('78bbb554-1f00-42b2-a220-d6cd41f272f2', 'RFCI', 'TWWHA-PTBP5-RFCI-NO', 'RFCI', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('886e50d1-940a-4e2d-b866-d79cecb72ed8', 'L to OTH', 'TWWHA-PTBP5/OTH/YY/L-NO', 'Letter to KSOP', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', '', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('944c0e65-9b02-4cf4-aa03-72cd13405beb', 'Letter to Engineer', 'PTRPWJ/PTBP6/ENGR/YY/L-NO', '<p>Letter to Engineer</p>', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 07:27:10'), ('9dd1cd45-be34-40d6-b653-83162056ca82', 'CRPN', 'PTBP6/ENGR/CRPN/NO', 'Contractors Response to Particular Notice', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('a06e019b-38fe-4c2f-adf1-a481493303ce', 'T', 'PTRPWJ/PTBP6/ENGR/YY/T-NO', 'Document Transmittal', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('a31d10a1-2035-4616-81df-580a6905b079', 'L to DGST', 'PTRPWJ/PTBP6/DGST/YY/L-NO', 'Letter to DGST', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('ae9ac85f-f84e-46a5-82f2-20e76565f664', 'CRSI', 'PTBP6/ENGR/CRSI/NO', 'Contractor Response to Site Instruction', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'PatimOne Consul', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('c2ac9253-f438-4bbd-8eaa-824507a2bc5d', 'L to TWWHA', 'N/A', 'Letter to the Contractor', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'TWWHA', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('d251e795-ee54-46a1-9ccb-d036061dd81b', 'L to KSOP', 'TWWHA-PTBP5/KSOP/YY/L-NO', 'Letter to KSOP', 'IN', '62116337-ba4d-470d-8478-a41c49a9769d', 'KSOP', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for patimone_data_rfi
-- ----------------------------
DROP TABLE IF EXISTS `patimone_data_rfi`;
CREATE TABLE `patimone_data_rfi`  (
  `id` char(36) NOT NULL,
  `submitted_date` date NOT NULL,
  `submitted_time` time NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `doc_number` varchar(30) NOT NULL,
  `specification_std` text NOT NULL,
  `contractor_notes` text NULL DEFAULT NULL,
  `contractor_pic` varchar(255) NULL DEFAULT NULL,
  `sub_contractor_pic` varchar(255) NULL DEFAULT NULL,
  `contractor_engineer` varchar(255) NULL DEFAULT NULL,
  `contractor_qa_qc` varchar(255) NULL DEFAULT NULL,
  `description` text NULL DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `created_by` char(40) NOT NULL,
  `updated_by` char(40) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_data_rfi_reference_no_index`(`reference_no`) USING BTREE,
  INDEX `patimone_data_rfi_doc_number_index`(`doc_number`) USING BTREE,
  INDEX `patimone_data_rfi_specification_std_index`(`specification_std`(768)) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_data_rfi
-- ----------------------------
BEGIN;
INSERT INTO `patimone_data_rfi` (`id`, `submitted_date`, `submitted_time`, `reference_no`, `doc_number`, `specification_std`, `contractor_notes`, `contractor_pic`, `sub_contractor_pic`, `contractor_engineer`, `contractor_qa_qc`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('879cbe3e-4b47-4fb2-b789-0a1bcc84c0b5', '2024-04-25', '03:04:04', '0', '0', '-', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 15:01:04', '2024-04-25 15:01:04'), ('93662087-4f47-4060-8613-7625285f3344', '2024-04-25', '03:04:05', '0', '0', '-', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 15:02:05', '2024-04-25 15:02:05'), ('9af64405-b393-4ca7-bc39-664e53ec5b93', '2024-04-25', '02:04:05', '0', '0', '-', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 14:39:05', '2024-04-25 14:39:05'), ('bffaff4f-e1c9-4c36-87b1-3a4a28c7c3ef', '2024-04-25', '02:04:02', '0', '0', '-', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 14:39:02', '2024-04-25 14:39:02'), ('fad8fe3e-b354-4f17-944e-870f767d11b6', '2024-04-25', '02:04:28', '0', '0', '-', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 14:59:28', '2024-04-25 14:59:28'), ('fbdd1aef-17df-45a6-9bf5-ec8083ca4dc5', '2024-04-25', '03:04:10', '0', '0', '-', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 15:03:10', '2024-04-25 15:03:10');
COMMIT;

-- ----------------------------
-- Table structure for patimone_document_references
-- ----------------------------
DROP TABLE IF EXISTS `patimone_document_references`;
CREATE TABLE `patimone_document_references`  (
  `id` char(36) NOT NULL,
  `letter_id` varchar(255) NULL DEFAULT NULL,
  `letter_id_reference` varchar(255) NULL DEFAULT NULL,
  `reference_number` varchar(255) NULL DEFAULT NULL,
  `source` varchar(255) NULL DEFAULT NULL COMMENT 'contractor,pmu,dgst,other',
  `subject` varchar(255) NULL DEFAULT NULL,
  `package_id` char(40) NULL DEFAULT NULL,
  `document_type` varchar(255) NULL DEFAULT NULL COMMENT 'letter, transmittal,rfi,other',
  `tags` varchar(255) NULL DEFAULT NULL,
  `description` varchar(255) NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_document_reference_document_id_index`(`letter_id`) USING BTREE,
  INDEX `patimone_document_reference_reference_number_index`(`reference_number`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_document_references
-- ----------------------------
BEGIN;
INSERT INTO `patimone_document_references` (`id`, `letter_id`, `letter_id_reference`, `reference_number`, `source`, `subject`, `package_id`, `document_type`, `tags`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('0097d388-0411-4b4c-9c83-7c724f55436d', '5f9b6ba9-54a4-474e-8bb6-58b8f8b3ccfb', '59e9cc20-111c-44e0-9211-f42acb5c70f6', 'PTRPWJ/PTBP6/ENGR/23/L-012', 'ENG', 're-Request for Subcontractor Approval for Survey Works', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-18 11:45:56', '2024-04-18 11:45:56'), ('05684e99-62ca-409e-9bd8-752c29f67e4e', '60414075-ff7a-4add-8299-f25545437edc', '0ff75424-5bf4-4c66-8679-c44f99b903ff', 'PTRPWJ/PTBP6/ENGR/24/L-NO', 'ENG', 'PTRPWJ-PTBP6-ENGR-24-L-418 - P6-CLM-CON-01 Claim for Financing Charges Due to Delayed Payment of IPC No.5 (Monthly Statement No. 4)', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 07:40:21', '2024-04-24 07:40:21'), ('098632da-6e39-4cfc-b34c-2b8f6f396525', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '60414075-ff7a-4add-8299-f25545437edc', 'PTRPWJ/PTBP6/ENGR/24/L-343', 'EMP', 'Response to Request for Comparison Table of Alternative 1 & 2 of Interface Package 7', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 11:26:51', '2024-04-25 13:08:29'), ('0b4f279c-cdc9-4390-9478-4e16b2bbd584', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', 'eb9eff80-65a0-42c7-8b5c-8005e199d9f7', 'PTRPWJ/PTBP6/KSOP/24/L-0187', 'EMP', 'test', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 11:28:20', '2024-04-25 11:24:09', '2024-04-25 11:28:20'), ('0d4e8c76-821e-465b-888f-718e40e21bd7', 'eb9eff80-65a0-42c7-8b5c-8005e199d9f7', '59e9cc20-111c-44e0-9211-f42acb5c70f6', 'PTRPWJ/PTBP6/ENGR/23/L-012', 'ENG', 're-Request for Subcontractor Approval for Survey Works', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-22 10:29:09', '2024-04-22 10:29:09'), ('0db84c08-22b0-43a9-aa7d-5a9d9a8dadd4', '5f9b6ba9-54a4-474e-8bb6-58b8f8b3ccfb', 'f3a30950-9620-4997-894c-fc3cd9bb5ada', 'PTRPWJ/PTBP6/KSOP/24/L-NO', 'EMP', 'PTMB-TWWHA-RES-2024-0320a - Method Statement for Rock Mound & SPSP Scarps Removal of Temporary Berthing Facility - 2 R1', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-18 11:47:10', '2024-04-18 11:47:10'), ('147c3724-6a69-4245-b8e1-c99ada6e0c53', 'e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', 'ea997f01-bbbe-4385-8dac-caa692500c16', 'PTRPWJ/PTBP6/ENGR/24/L-NO', 'ENG', NULL, '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-23 13:34:52', '2024-04-23 13:34:52'), ('1b96ba26-e02d-47f0-a601-5150bddd4627', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '047b4454-3628-42ac-926f-8a938160c3c8', 'PTRPWJ/PTBP6/ENGR/24/T-0904a', 'CTR', 'PTBP6-T-0904a - Quality Inspection Report for Prestessing and Concrete Casting PC Deck Slab Fabrication (15th Week) PT. Wika Beton, Rev. 01', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 11:52:56', '2024-04-25 11:53:33'), ('32d4bf7f-aeff-471d-ba8d-32973a22831d', 'e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', '047b4454-3628-42ac-926f-8a938160c3c8', 'PTRPWJ/PTBP6/ENGR/24/T-0904a', 'ENG', 'PTBP6-T-0904a - Quality Inspection Report for Prestessing and Concrete Casting PC Deck Slab Fabrication (15th Week) PT. Wika Beton, Rev. 01', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-23 09:48:29', '2024-04-23 09:48:29'), ('34add824-e951-4aef-9c4d-40f2fe372716', '60414075-ff7a-4add-8299-f25545437edc', '587087d2-09e6-49ed-844e-5a74287e960c', 'PTRPWJ/PTBP6/DGST/24/L-047', 'EMP', 'example letter from contractor to DGST', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', '2024-04-24 10:47:21', '2024-04-24 07:40:33', '2024-04-24 10:47:21'), ('35b13e74-22ae-44d6-8d28-5a75fa482fc5', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '43e46d3e-0a35-4d5c-9a18-a301564c31e7', 'PTRPWJ/PTBP6/KSOP/24/L-005', 'ENG', 'Assign to inspect the CDM work', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 10:39:13', '2024-04-25 10:39:13'), ('4e5a01cf-b20b-433b-823a-5b363ae3afa1', '89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', '23f8f501-309c-461b-8896-6384cac7120a', 'PTRPWJ/PTBP6/ENGR/24/L-029', 'ENG', 'Re Instruction for Providing Alternative Catalogue for Employer\'s and Engineer\'s Vehicles (Item No. 1.4.4.1 and Item 1.4.4.3)', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 01:58:58', '2024-04-24 01:58:58'), ('525e32a1-8da3-47b3-ae1f-c1f1e6afef02', '60414075-ff7a-4add-8299-f25545437edc', '587087d2-09e6-49ed-844e-5a74287e960c', 'PTRPWJ/PTBP6/DGST/24/L-047', 'ENG', 'example letter from contractor to DGST', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:49:08', '2024-04-24 10:49:08'), ('61ddc141-d65e-49ab-ac8e-0f380e7e0522', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '047b4454-3628-42ac-926f-8a938160c3c8', 'PTRPWJ/PTBP6/ENGR/24/T-0904a', 'ENG', 'PTBP6-T-0904a - Quality Inspection Report for Prestessing and Concrete Casting PC Deck Slab Fabrication (15th Week) PT. Wika Beton, Rev. 01', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 11:34:05', '2024-04-25 11:37:05'), ('62a34873-551a-4887-a505-412637d2c72a', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', 'bdbc6f6d-976d-468c-833c-97d0e3027f69', 'asasasasas', 'ENG', 'asasasasasas', '', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 11:41:27', '2024-04-25 11:41:17', '2024-04-25 11:41:27'), ('63a0f8ff-ce83-4357-8a82-61aeb6948fd2', 'e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', '23f8f501-309c-461b-8896-6384cac7120a', 'PTRPWJ/PTBP6/ENGR/24/L-029', 'ENG', 'Re Instruction for Providing Alternative Catalogue for Employer\'s and Engineer\'s Vehicles (Item No. 1.4.4.1 and Item 1.4.4.3)', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-23 13:31:25', '2024-04-23 13:31:25'), ('6b75cf59-07f5-4122-b287-b95a0afa389c', 'e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', 'PTRPWJ/PTBP6/ENGR/24/L-010', 'ENG', 'Re Engineer & Contractor Site Offices Renovation Works Schedule', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 04:41:31', '2024-05-02 04:41:31'), ('6c21f934-dba3-4403-9f7f-b5d2aee31099', '23f8f501-309c-461b-8896-6384cac7120a', '587087d2-09e6-49ed-844e-5a74287e960c', 'PTRPWJ/PTBP6/DGST/24/L-047', 'ENG', 'example letter from contractor to DGST', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-19 02:33:52', '2024-04-19 02:33:52'), ('6ec9e855-f342-433b-8124-4fd69aceec75', 'e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', 'c8a0ff82-0967-4cab-a8c7-0d81e559d60d', 'PTRPWJ/PTBP6/ENGR/24/L-012', 'ENG', 're-Request for Subcontractor Approval for Survey Works', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-23 13:33:25', '2024-04-23 13:33:25'), ('706c94aa-ac3d-4fd9-b530-aefd8ef2a983', 'c8a0ff82-0967-4cab-a8c7-0d81e559d60d', '43e46d3e-0a35-4d5c-9a18-a301564c31e7', 'PTRPWJ/PTBP6/KSOP/24/L-005', 'ENG', 'Assign to inspect the CDM work', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-19 09:40:46', '2024-04-19 09:40:46'), ('70ab97f7-3c09-4338-a98e-a37f38b430b6', '5f9b6ba9-54a4-474e-8bb6-58b8f8b3ccfb', '047b4454-3628-42ac-926f-8a938160c3c8', 'PTRPWJ/PTBP6/ENGR/24/T-0904a', 'ENG', 'PTBP6-T-0904a - Quality Inspection Report for Prestessing and Concrete Casting PC Deck Slab Fabrication (15th Week) PT. Wika Beton, Rev. 01', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-18 10:40:27', '2024-04-18 10:40:27'), ('7ae04683-5998-4f9f-a311-0a77332dcf1c', '89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', '89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', 'PTRPWJ/PTBP6/ENGR/24/L-011', 'CTR', 'Request for Subcontractor Approval for Soil Investigation Work', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 02:13:01', '2024-04-24 02:13:01'), ('80c4aa0a-f84e-44ae-8aa1-e4d3a6c8e72b', 'c8a0ff82-0967-4cab-a8c7-0d81e559d60d', '986e41ab-57ca-45d1-b36f-ec922c1cbaa9', 'PTRPWJ/PTBP6/KSOP/24/L-NO', 'ENG', 'test for get error access', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-19 09:41:02', '2024-04-19 09:41:02'), ('8a068df2-b82e-48b8-a85c-3c439f559a0c', 'e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', '0ff75424-5bf4-4c66-8679-c44f99b903ff', 'PTRPWJ/PTBP6/ENGR/24/L-NO', 'CTR', 'PTRPWJ-PTBP6-ENGR-24-L-418 - P6-CLM-CON-01 Claim for Financing Charges Due to Delayed Payment of IPC No.5 (Monthly Statement No. 4)', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-23 13:34:31', '2024-04-23 13:34:31'), ('8d2f57ce-22ec-4933-a357-a71e47859162', '5f9b6ba9-54a4-474e-8bb6-58b8f8b3ccfb', '249a60cf-607a-4500-9f91-a4b12db8d637', 'PTRPWJ/PTBP6/KSOP/24/L-014', 'ENG', 'tesa', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-18 10:38:14', '2024-04-18 10:38:14'), ('978b233a-e8d4-4824-9c50-c215f59aacbf', '89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', '89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', 'PTRPWJ/PTBP6/ENGR/24/L-011', 'EMP', 'Request for Subcontractor Approval for Soil Investigation Work', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 02:13:20', '2024-04-24 02:13:20'), ('9b7fc116-cf8d-457a-aae2-7bf53786cf0b', '23f8f501-309c-461b-8896-6384cac7120a', 'edc8c104-f187-42ad-8055-1e5ee2d1527e', 'PTRPWJ/PTBP6/ENGR/24/L-0004', 'ENG', 'Contractor\'s Health & Safety (Accident Prevention) Officer', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-19 02:34:01', '2024-04-19 02:34:01'), ('9d80c7a7-6167-4efd-8d00-75df40637dd0', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '43e46d3e-0a35-4d5c-9a18-a301564c31e7', 'PTRPWJ/PTBP6/KSOP/24/L-005', 'EMP', 'Assign to inspect the CDM work', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 10:39:56', '2024-04-25 11:33:30'), ('a200f8b2-cc0e-428e-9b18-d29c6634ccb0', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '4f60959e-ebfe-4fc0-8d99-7d2de9299d00', 'PTRPWJ/PTBP6/ENGR/24/L-030', 'ENG', 'Request for Confirmation Regarding M&E Works at Bridge and Backup Yard', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 10:39:47', '2024-04-25 10:39:47'), ('a6402ee7-3ac1-47f4-9957-251533a2c21d', '89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', '047b4454-3628-42ac-926f-8a938160c3c8', 'PTRPWJ/PTBP6/ENGR/24/T-0904a', 'CTR', 'PTBP6-T-0904a - Quality Inspection Report for Prestessing and Concrete Casting PC Deck Slab Fabrication (15th Week) PT. Wika Beton, Rev. 01', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 01:59:21', '2024-04-24 01:59:21'), ('af7bfb54-f0c1-451a-8845-82f97690cad7', '60414075-ff7a-4add-8299-f25545437edc', 'eb9eff80-65a0-42c7-8b5c-8005e199d9f7', 'PTRPWJ/PTBP6/KSOP/24/L-0187', 'ENG', 'test', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', '2024-04-24 10:46:19', '2024-04-24 07:40:14', '2024-04-24 10:46:19'), ('b94a04f1-18a4-4bfc-9922-cc646dd5a64d', '60414075-ff7a-4add-8299-f25545437edc', '249a60cf-607a-4500-9f91-a4b12db8d637', 'PTRPWJ/PTBP6/KSOP/24/L-014', 'ENG', 'tesa', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:48:42', '2024-04-24 10:48:42'), ('bbb1be24-73df-436d-b06c-85eb046ac3ae', 'c8a0ff82-0967-4cab-a8c7-0d81e559d60d', '59e9cc20-111c-44e0-9211-f42acb5c70f6', 'PTRPWJ/PTBP6/ENGR/23/L-012', 'ENG', 're-Request for Subcontractor Approval for Survey Works', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-19 09:40:51', '2024-04-19 09:40:51'), ('c1cfe606-6088-416e-aab1-914e2ca73682', '60414075-ff7a-4add-8299-f25545437edc', '4f60959e-ebfe-4fc0-8d99-7d2de9299d00', 'PTRPWJ/PTBP6/ENGR/24/L-030', 'ENG', 'Request for Confirmation Regarding M&E Works at Bridge and Backup Yard', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:55:11', '2024-04-24 10:55:11'), ('c2a49ad2-c100-4160-b964-e2b4d6880e6f', 'e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', 'f9d0a95b-6945-424b-875a-6c24e88c5dab', 'PTRPWJ/PTBP6/ENGR/24/L-0015', 'EMP', 'PTRPWJ-PTBP6-ENGR-24-L-394 - Notification for the Mass Production of Steel Pipe Piles (SPP) (Upper 2+Lower) Landside', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-23 13:33:59', '2024-04-23 13:33:59'), ('c6df8b65-3ed6-4993-a678-d6c121a1f278', '89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', '8066f1cf-46fe-4d6c-a110-e4106d4d8935', 'PTRPWJ/PTBP6/ENGR/24/L-16532', 'ENG', 'this is the test insert data after long holiday', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 02:25:03', '2024-04-24 02:25:03'), ('cbdea955-4b79-4fb5-8b8d-78bf53eca6fa', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', 'f9d0a95b-6945-424b-875a-6c24e88c5dab', 'PTRPWJ/PTBP6/ENGR/24/L-0015', 'ENG', 'PTRPWJ-PTBP6-ENGR-24-L-394 - Notification for the Mass Production of Steel Pipe Piles (SPP) (Upper 2+Lower) Landside', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 09:06:37', '2024-04-25 11:14:35'), ('d44d2cb6-2b0b-41f9-a43a-8cd0e4d6da59', '50206bd0-702b-4a67-ab4d-3e46710cc035', '43e46d3e-0a35-4d5c-9a18-a301564c31e7', 'PTRPWJ/PTBP6/KSOP/24/L-005', 'EMP', 'Assign to inspect the CDM work', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-29 09:45:28', '2024-04-29 09:45:28'), ('e00cc81b-0e62-4ffd-b7b8-13f1c5fe4be3', 'e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', 'ea997f01-bbbe-4385-8dac-caa692500c16', 'PTRPWJ/PTBP6/ENGR/24/L-NO', 'ENG', NULL, '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-23 13:35:40', '2024-04-23 13:35:40'), ('e252d239-956d-4002-ab80-a4e94424e941', '5f9b6ba9-54a4-474e-8bb6-58b8f8b3ccfb', '43e46d3e-0a35-4d5c-9a18-a301564c31e7', 'PTRPWJ/PTBP6/KSOP/24/L-005', 'ENG', 'Assign to inspect the CDM work', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-18 10:40:05', '2024-04-18 10:40:05'), ('f645b4e9-33da-4d55-94b6-41d23f1bf67b', '46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '23f8f501-309c-461b-8896-6384cac7120a', 'PTRPWJ/PTBP6/ENGR/24/L-029', 'CTR', 'Re Instruction for Providing Alternative Catalogue for Employer\'s and Engineer\'s Vehicles (Item No. 1.4.4.1 and Item 1.4.4.3)', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 11:28:12', '2024-04-25 11:28:12'), ('fbf08e7d-3c59-486c-a17e-614b37862ebc', '50206bd0-702b-4a67-ab4d-3e46710cc035', 'c8d4eb59-2260-451a-a1ff-ab91205a68ba', 'PTRPWJ/PTBP6/ENGR/24/L-0711', 'ENG', 'L-050 - Re-Request for Clarification of Hydrographic Survey Equipment at Disposal Area', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '2', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-29 09:45:41', '2024-04-29 09:45:53'), ('fe28a661-856d-48ba-a9b6-81750fb69cab', 'eb9eff80-65a0-42c7-8b5c-8005e199d9f7', 'f3a30950-9620-4997-894c-fc3cd9bb5ada', 'PTRPWJ/PTBP6/KSOP/24/L-NO', 'EMP', 'PTMB-TWWHA-RES-2024-0320a - Method Statement for Rock Mound & SPSP Scarps Removal of Temporary Berthing Facility - 2 R1', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-22 10:29:20', '2024-04-22 10:29:20');
COMMIT;

-- ----------------------------
-- Table structure for patimone_documenttypes
-- ----------------------------
DROP TABLE IF EXISTS `patimone_documenttypes`;
CREATE TABLE `patimone_documenttypes`  (
  `id` char(36) NOT NULL,
  `document_type_name` varchar(255) NOT NULL,
  `category_id` char(40) NULL DEFAULT NULL,
  `package_id` char(40) NULL DEFAULT NULL,
  `description` longtext NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_documenttypes
-- ----------------------------
BEGIN;
INSERT INTO `patimone_documenttypes` (`id`, `document_type_name`, `category_id`, `package_id`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('0fd59fae-2e4e-4c5a-96ba-652a8beaed81', 'MATERIALS', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 07:41:40', '2024-05-02 07:41:40'), ('234a1fe7-3a91-4fa1-a4d5-456593d758f8', 'CONTRACT DOCS', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 07:36:14', '2024-05-02 07:36:14'), ('3bc538d7-9f2d-4734-829e-97a3668883bd', 'INSPECTION AND TEST PLAN (ITP)', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 07:42:12', '2024-05-02 07:42:12'), ('3c0e77a2-8955-4e69-828c-d1e69a1338b4', 'EQUIPMENT', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 07:42:39', '2024-05-02 07:42:39'), ('7d496eb3-1132-452c-ba28-bc1b1e96e8a9', 'SHOP DRAWINGS', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 07:42:26', '2024-05-02 07:42:26'), ('b61c0903-00aa-4815-b82c-c3cf3a2c4030', 'CODES AND STANDARDS', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 08:14:09', '2024-05-02 08:14:09'), ('c2dd63f7-7b76-4b14-bf73-939416dd8113', 'Material Approval', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 10:33:53', '2024-05-02 10:33:53'), ('ca70f9c6-ee76-42ef-b9ed-9b430722fa85', 'REPORTS', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 07:42:54', '2024-05-02 07:42:54'), ('e3b3494e-25fa-4fb3-84a1-5cb714e41742', 'METHOD STATEMENT', 'IN', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 07:41:56', '2024-05-02 07:41:56');
COMMIT;

-- ----------------------------
-- Table structure for patimone_emails
-- ----------------------------
DROP TABLE IF EXISTS `patimone_emails`;
CREATE TABLE `patimone_emails`  (
  `id` char(36) NOT NULL,
  `engineer_id` varchar(255) NOT NULL,
  `email` varchar(255) NULL DEFAULT NULL,
  `description` varchar(255) NULL DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_emails_email_index`(`email`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_emails
-- ----------------------------
BEGIN;
INSERT INTO `patimone_emails` (`id`, `engineer_id`, `email`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('02240921-ee64-44fb-8f34-3a3eb49167de', '0f679e57-29df-44b2-a21f-d9ff92cf3b4d', 'umar@patimoneconsul.id', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-01 08:48:11', '2024-04-01 08:48:11'), ('254cb773-4efc-40d9-a36a-fa0b6f290c0a', 'd28074f2-ceb0-4844-a4ed-b4d9a3d43480', 'nida.rahma@outlook.com', 'primary', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-01 03:17:18', '2024-04-01 03:17:29'), ('28353cda-9916-4656-bc0e-c81d98ea4cfc', '144656ca-3ea2-4469-b9ec-f56fe13f7815', 'rubi_purwono@patimoneconsul.id', NULL, '0', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 09:05:07', '2024-04-24 09:05:07'), ('5ed4836f-664c-4be8-8e9b-8b277c396219', '0a1a92a6-3985-43cf-a63d-3c497355d919', 'bryan123@gmail.com', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 09:04:06', '2024-04-24 09:04:06'), ('77a56824-6f96-4359-af91-284e174c1c1a', '5729c63a-a992-4472-a3b2-6d02bea44428', 'anugrah.rizki@patimoneconsul.id', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-25 12:11:00', '2024-04-25 12:11:00'), ('7b03112b-da3d-4305-9fe6-ad1a5b382e13', '0f1b8674-66d3-442c-8bdf-784af5317bff', 'rezky@patimoneconsul.id', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:16:26', '2024-04-24 10:16:26'), ('7f0261f8-094a-48cb-878c-584468c6ea92', '68cfc76f-afef-4b0e-bdde-638d61c3b0cc', 'risani.gazi@gmail.com', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 10:16:44', '2024-04-24 10:16:44'), ('8762bd44-8c5b-4dcd-ad02-d4b232fd4c77', '0a1a92a6-3985-43cf-a63d-3c497355d919', 'briyan@patimoneconsul.id', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 09:03:54', '2024-04-24 09:03:54'), ('a617de5e-5445-4b09-ac3b-8fc5757c3a3c', 'd28074f2-ceb0-4844-a4ed-b4d9a3d43480', 'nidarahma@gmail.com', NULL, '0', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-01 03:17:41', '2024-04-01 03:17:45'), ('a720f129-3d2d-48c8-b482-4d9a594f0dfe', '144656ca-3ea2-4469-b9ec-f56fe13f7815', 'rubi.smec@gmail.com', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 09:04:55', '2024-04-24 09:04:55'), ('c04b147c-1c43-4db1-b0cf-58f301602acb', 'c08fc167-e45a-494e-9964-6513bfdcbb8b', 'ivan@patimoneconsul.id', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-01 08:49:14', '2024-04-01 08:49:14'), ('c45e5ae6-6a71-4a30-9822-37863379dab1', '05f94152-78ad-40f2-b4c4-f17479a1fb65', 'satriapanjipratama@gmail.com', NULL, '0', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-24 09:04:38', '2024-04-24 09:13:37'), ('ca6bbe43-483b-484e-b722-adbf69453ab2', '05f94152-78ad-40f2-b4c4-f17479a1fb65', 'satria.panji@patimoneconsul.id', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 09:04:27', '2024-04-24 09:04:27'), ('d978ffbf-f11c-4c23-8e94-9432a7911ad8', '0f679e57-29df-44b2-a21f-d9ff92cf3b4d', 'u.wirahadi10@gmail.com', NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-01 08:48:05', '2024-04-01 08:48:05');
COMMIT;

-- ----------------------------
-- Table structure for patimone_engineers
-- ----------------------------
DROP TABLE IF EXISTS `patimone_engineers`;
CREATE TABLE `patimone_engineers`  (
  `id` char(36) NOT NULL,
  `code` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `nickname` varchar(70) NOT NULL,
  `initial` varchar(100) NOT NULL,
  `type` enum('engineer','inspector','ss','other') NOT NULL DEFAULT 'engineer',
  `photo_profile` varchar(255) NULL DEFAULT NULL,
  `dicipline` text NULL DEFAULT NULL,
  `phone1` varchar(50) NULL DEFAULT NULL,
  `phone2` varchar(100) NULL DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `description` text NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_engineers_id_code_nickname_index`(`id`, `code`, `nickname`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_engineers
-- ----------------------------
BEGIN;
INSERT INTO `patimone_engineers` (`id`, `code`, `full_name`, `nickname`, `initial`, `type`, `photo_profile`, `dicipline`, `phone1`, `phone2`, `status`, `description`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('05f94152-78ad-40f2-b4c4-f17479a1fb65', '111', 'Satria Panji Pratama', 'Panji', 'spp', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:13:26', '2024-03-20 02:13:26'), ('0a1a92a6-3985-43cf-a63d-3c497355d919', '111', 'Bryan Aristian', 'Bryan', 'ba', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:15:21', '2024-03-20 02:15:21'), ('0f1b8674-66d3-442c-8bdf-784af5317bff', '111', 'Rezky Mukti MS', 'Rezky', 'rms', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:10:31', '2024-03-20 02:10:31'), ('0f679e57-29df-44b2-a21f-d9ff92cf3b4d', '111', 'Umar Wirahadi', 'Umar', 'uw', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', '2024-03-20 02:18:32', '2024-03-20 02:29:36'), ('127f20d7-b223-4419-9d2f-00966ef2e275', '111', 'Denis Andrea', 'Andre', 'and', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', '2024-03-20 02:35:40', '2024-03-20 02:35:50'), ('12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99', '111', 'Yahuo Horigome', 'Horigome', 'yh', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:06:03', '2024-03-20 02:06:03'), ('144656ca-3ea2-4469-b9ec-f56fe13f7815', '111', 'Rubi Purwono', 'Rubi', 'rp', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:07:35', '2024-03-20 02:07:35'), ('36475e6b-303d-420b-aa48-edc76f16fa8a', '111', 'Posma Bartua Marpaung', 'Posma', 'pbm', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:30:32', '2024-03-20 02:30:32'), ('404acab7-3c57-4cfd-b6dc-52f56c2c61ac', '111', 'Toguh Ocfry Jaya Tondang', 'Toguh', 'toj', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:15:46', '2024-03-20 02:15:46'), ('42f3b046-c24d-47a3-a1c6-f371c17d3b4e', '111', 'Tatsuru Aoyama', 'Aoyama', 'ta', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:04:00', '2024-03-20 02:04:00'), ('47a2fa7d-e863-4a66-806b-08f94e9d7bd2', '111', 'Bertha Kartiana', 'Bertha', 'bk', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:08:42', '2024-03-20 02:08:42'), ('4ca2d7de-f2c4-4aa9-b47e-d28f3d4a414f', '111', 'Syahrul', 'Syahrul', 'syh', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:30:03', '2024-03-20 02:30:03'), ('4ffc5f13-9c00-406f-ac96-fb1757eaed88', '111', 'Roseno', 'Seno', 'rsn', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:35:24', '2024-03-20 02:35:24'), ('530b6b77-8009-4f00-ac83-469f77eacebd', '111', 'Hajime Nakajima', 'Nakajima', 'hn', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:05:08', '2024-03-20 02:05:08'), ('5729c63a-a992-4472-a3b2-6d02bea44428', '111', 'Anugrah Rizki Ramadhan', 'Rizki', 'arr', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:10:58', '2024-03-20 02:10:58'), ('5c55c7f3-fb2e-4abb-96a5-0335980acff4', '111', 'Darning', 'Darning', 'dr', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:35:10', '2024-03-20 02:35:10'), ('5cb3687f-3c3d-4175-ac0c-9f1feb795a51', '111', 'Shingo Shiratori', 'Shiratori', 'ss', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:02:00', '2024-03-20 02:02:00'), ('631104e3-0cf3-440a-9e54-25543c5243e8', '111', 'Kenichi Iwama', 'Iwama', 'ki', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, '2024-03-20 01:57:29', '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 01:57:12', '2024-03-20 01:57:29'), ('65756126-2a9c-4764-b16b-0274441bc4cf', '111', 'Fidi Fadiat', 'Fidi', 'fdf', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:13:06', '2024-03-20 02:13:06'), ('68cfc76f-afef-4b0e-bdde-638d61c3b0cc', '111', 'Risani Gazi', 'Risani', 'rg', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:16:08', '2024-03-20 02:16:08'), ('70599645-61bf-4ce3-94f3-4a82049865bb', '111', 'Nobuhide Miyawaki', 'Miyawaki', 'nm', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:02:58', '2024-03-20 02:02:58'), ('79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', '111', 'Faizhal K. Prasetya', 'Faizhal', 'fkp', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:16:41', '2024-03-20 02:16:41'), ('7b83f2dd-de3f-49a9-9b12-bc158b1484c8', '111', 'Jadidah Fihriz Nanda', 'Jadidah', 'jfn', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:34:23', '2024-03-20 02:34:23'), ('841ce06d-97cf-4019-ab78-939a3632df98', '111', 'Herum Petrus Manalu', 'Herum', 'hpm', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', '2024-03-20 02:08:59', '2024-04-17 11:00:39'), ('8c4d582d-21f3-4feb-8072-d7e013d73fd8', '111', 'Miftahul Hadi', 'Hadi', 'mh', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:34:00', '2024-03-20 02:34:00'), ('8ece5de4-70c9-4fd9-b35d-5c2d6d02cc43', '111', 'Farida Eri Kurniawan', 'Farida', 'fek', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:16:59', '2024-03-20 02:16:59'), ('8fe19a15-80b3-4c41-8e28-832af759d425', '111', 'Arief Maulana Fajrin', 'Arief', 'amf', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:11:19', '2024-03-20 02:11:19'), ('90012eca-0a5e-4ec7-ac5e-f3a04006df25', '111', 'Le Phuong Dong', 'Dong', 'lpd', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:00:40', '2024-03-20 02:00:40'), ('92ef6802-2a8c-44eb-8ace-286a7aabda58', '111', 'Yoshihiro Sakata', 'Sakata', 'ys', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:03:42', '2024-03-20 02:03:42'), ('97da0c50-a1ad-4a2f-9645-6c1810d0d2c0', '111', 'Kyoko Mishima', 'Mishima', 'km', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:07:21', '2024-03-20 02:07:21'), ('9a127c07-d963-465c-8cca-d49f56d1f791', '111', 'Dedi Saputra', 'Dedi', 'ds', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:13:41', '2024-03-20 02:13:41'), ('a07d383d-40ba-4fef-9873-48f7ee128c68', '111', 'Kenichi Iwama', 'Iwama', 'ki', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 01:57:12', '2024-03-20 01:57:12'), ('a93812ed-85cd-4275-be7b-8d578bb99354', '111', 'Yulihardi', 'Hardi', 'yhd', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:17:39', '2024-03-20 02:17:39'), ('ac67bda9-9a59-4e1e-a06e-23c0a143b213', '111', 'Tri harry Iswanto', 'Tri', 'thi', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:11:43', '2024-03-20 02:11:43'), ('b47a9195-0c03-47ad-b3e1-cfd48bbae0ae', '111', 'Jonathan Badua Luis', 'Volvo', 'jbl', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:02:16', '2024-03-20 02:02:16'), ('b6fddde5-7ca9-488f-be70-cfc818d9def6', '111', 'Kenichi Iwama', 'Iwama', 'ki', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, '2024-03-20 01:57:26', '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 01:57:15', '2024-03-20 01:57:26'), ('be5448ef-405c-47fe-895d-f30989b60982', '111', 'Daisuke Yeoneura', 'Yeoneura', 'dy', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:04:24', '2024-03-20 02:04:24'), ('c08fc167-e45a-494e-9964-6513bfdcbb8b', '111', 'Muhamad Istivan Mulya', 'Ivan', 'mim', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:34:50', '2024-03-20 02:34:50'), ('c2f5e0e9-895e-4e0f-b23e-c69ac86821ef', '111', 'Dimas M. Zakki', 'Dimas', 'dmz', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:16:22', '2024-03-20 02:16:22'), ('c3f715bc-ade5-423f-bcc9-e5a40e365705', '111', 'Pradhityo A Budiono', 'Adit', 'pab', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:08:10', '2024-03-20 02:08:10'), ('c7019bb4-c45d-4ecd-bf66-68339e416063', '111', 'Rahmat Darajat', 'Rahmat', 'rd', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:11:57', '2024-03-20 02:11:57'), ('cc282b3f-18c9-4cb0-936d-a0a12c6c09dc', '111', 'Fanfan Fadilah', 'Fanfan', 'fnf', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:12:48', '2024-03-20 02:12:48'), ('cda42281-3e61-4988-9d83-26d3b19718e2', '111', 'Effendy Bamahry', 'Effendy', 'eb', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:12:22', '2024-03-20 02:12:22'), ('d28074f2-ceb0-4844-a4ed-b4d9a3d43480', '111', 'Nidra Rahma', 'Nida', 'ndr', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:32:10', '2024-03-20 02:32:10'), ('d700833b-4be5-495e-bc24-eaeaf108bc73', '111', 'Yu Kudo', 'Kudo', 'yk', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:06:38', '2024-03-20 02:06:38'), ('d91b1b3a-7882-4b6c-9356-5ca597a568ec', '111', 'Hiromi Namiki', 'Namiki', 'hn', 'engineer', NULL, NULL, '+6287817', NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-19 05:53:47', '2024-03-19 05:53:47'), ('e28bdb09-b8d5-45a9-aad7-d1cd7ffbaa32', '111', 'Yoshinori Miyake', 'Miyake', 'ym', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:07:05', '2024-03-20 02:07:05'), ('e4b5dd53-d721-426d-963e-3114e883b377', '111', 'Yuliandri Priyo Nugroho', 'Yuli', 'ypn', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:17:23', '2024-03-20 02:17:23'), ('e794d764-857a-402f-825b-6a038e9505e5', '111', 'Neutrino Fermi', 'Rino', 'nf', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:29:51', '2024-03-20 02:29:51'), ('ee0997e0-b4d1-48fa-94a9-99d3de3515cf', '111', 'Donny Mugia Prayoga', 'Donny', 'dmp', 'ss', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', '2024-03-20 02:18:22', '2024-04-16 12:12:50'), ('ee289d04-04f0-4af9-a8d0-33627a50025c', '111', 'Ryota Hamzah Mizuno', 'Mizuno', 'rhm', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:02:38', '2024-03-20 02:02:38'), ('f00d55f6-6974-43d8-84ac-1a9cd1a4bdcd', '111', 'Isnaini Amru', 'Amru', 'ia', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:08:24', '2024-03-20 02:08:24'), ('f1aacafd-e7fc-4136-89f5-1c896abd2c79', '111', 'Linni Wilda', 'Linni', 'lwr', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:17:56', '2024-03-20 02:17:56'), ('f7f97e04-6c30-4656-b6f1-6347e6d580cd', '111', 'Massashi Bessho', 'Bessho', 'mb', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:03:20', '2024-03-20 02:03:20'), ('fb0f0618-0bf2-464e-8553-360ea8bde0a0', '111', 'Wawan', 'Priatin', 'wp', 'inspector', NULL, NULL, '08122454xxx', '057711545x', '1', NULL, NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-26 10:02:23', '2024-04-26 10:02:23'), ('fb5ccff4-aa40-463f-ab46-099d6dd5e279', '111', 'Minoru Itsui', 'Itsui', 'mi', 'engineer', NULL, NULL, NULL, NULL, '1', NULL, NULL, '28e4b9c2-7ccd-489f-8507-77677f8ed9bf', NULL, '2024-03-20 02:06:24', '2024-03-20 02:06:24');
COMMIT;

-- ----------------------------
-- Table structure for patimone_failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `patimone_failed_jobs`;
CREATE TABLE `patimone_failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `patimone_failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_incoming_letters
-- ----------------------------
DROP TABLE IF EXISTS `patimone_incoming_letters`;
CREATE TABLE `patimone_incoming_letters`  (
  `id` char(36) NOT NULL,
  `package_id` int(10) UNSIGNED NOT NULL,
  `incoming_ref_no` varchar(255) NOT NULL,
  `incoming_letter_type` varchar(255) NOT NULL COMMENT 'letter, transmittal, other',
  `date_of_letter` date NOT NULL,
  `time_of_letter` time NULL DEFAULT NULL,
  `date_of_receive` date NOT NULL,
  `time_of_receive` time NULL DEFAULT NULL,
  `due_date` date NOT NULL,
  `type_of_receive` varchar(255) NOT NULL DEFAULT 'by email' COMMENT '[by email,hard copy, other]',
  `subject` text NOT NULL,
  `references` longtext NULL DEFAULT NULL CHECK (json_valid(`references`)),
  `type_of_action` varchar(255) NOT NULL,
  `date_delivered_pm` datetime NULL DEFAULT NULL,
  `engineer_assigned` varchar(255) NOT NULL COMMENT 'list of engineers',
  `assigned_by` varchar(255) NOT NULL COMMENT 'who has assign this letter tl or pm',
  `date_distribute` date NULL DEFAULT NULL,
  `time_distribute` time NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0:receive,1distributed, 2:responded,3:outstanding',
  `notes` text NULL DEFAULT NULL,
  `description` text NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_incoming_letters_id_index`(`id`) USING BTREE,
  INDEX `patimone_incoming_letters_incoming_ref_no_index`(`incoming_ref_no`) USING BTREE,
  INDEX `patimone_incoming_letters_subject_index`(`subject`(768)) USING BTREE,
  INDEX `patimone_incoming_letters_references_index`(`references`(768)) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_incoming_letters
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_letter_files
-- ----------------------------
DROP TABLE IF EXISTS `patimone_letter_files`;
CREATE TABLE `patimone_letter_files`  (
  `id` char(36) NOT NULL,
  `number` varchar(255) NOT NULL,
  `subject` longtext NOT NULL,
  `date` date NOT NULL,
  `type` enum('IN','OUT','OTHER') NOT NULL DEFAULT 'IN',
  `category` varchar(255) NULL DEFAULT NULL,
  `status` varchar(10) NULL DEFAULT NULL,
  `links` longtext NULL DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_letter_files_number_index`(`number`) USING BTREE,
  INDEX `patimone_letter_files_subject_index`(`subject`(768)) USING BTREE,
  INDEX `patimone_letter_files_date_index`(`date`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_letter_files
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_letter_sources
-- ----------------------------
DROP TABLE IF EXISTS `patimone_letter_sources`;
CREATE TABLE `patimone_letter_sources`  (
  `id` char(36) NOT NULL,
  `source_name` varchar(255) NOT NULL,
  `unit` varchar(255) NULL DEFAULT NULL,
  `description` text NULL DEFAULT NULL,
  `package_id` char(40) NULL DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NULL DEFAULT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_letter_sources
-- ----------------------------
BEGIN;
INSERT INTO `patimone_letter_sources` (`id`, `source_name`, `unit`, `description`, `package_id`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('2800804c-50ca-4941-95ef-ef18fb399e64', 'PMU-P8', '0', '', '62116337-ba4d-470d-8478-a41c49a9769d', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('3be10b2c-2c42-44c2-982c-1f8fe0cdc796', 'Other', '0', NULL, '1e9fd856-6e81-470c-9835-c70ec9e69a6c', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 07:22:55'), ('565a9852-36b1-4531-a3a8-9fb5ed9d4ce0', 'KSOP', '0', '', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('6858e56f-18c3-40bb-8905-5135d589b63d', 'KSOP', '0', '', '62116337-ba4d-470d-8478-a41c49a9769d', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', 'PTRPWJ', '1', '', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('8d7438d8-8bef-47ae-b40a-d39e0106e37b', 'TWWHA', '1', '', '62116337-ba4d-470d-8478-a41c49a9769d', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('8f335f9f-07a0-4f4a-ba08-07faabd0f324', 'Other', '0', NULL, '62116337-ba4d-470d-8478-a41c49a9769d', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-24 07:23:11'), ('8f686189-2b28-426d-ae56-cdeebcf0700e', 'PMU-P8', '0', '', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('972a2380-6fb3-430f-a464-f8b98bf52a4c', 'PMU-P6', '0', '', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('d6cd9614-27e9-409f-b6d5-715df527a90b', 'DGST', '0', '', '62116337-ba4d-470d-8478-a41c49a9769d', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('e0582f5d-a621-4141-953d-28002d7dc397', 'PMU-P5', '0', '', '62116337-ba4d-470d-8478-a41c49a9769d', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL), ('fa78f24c-41ac-4a77-8ac8-bfd502835e7d', 'DGST', '0', '', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for patimone_letters
-- ----------------------------
DROP TABLE IF EXISTS `patimone_letters`;
CREATE TABLE `patimone_letters`  (
  `id` char(36) NOT NULL,
  `package_id` char(40) NOT NULL,
  `type` enum('IN','OUT') NOT NULL,
  `letter_source_id` char(36) NOT NULL,
  `correspondence_type` varchar(255) NOT NULL,
  `document_no` varchar(255) NOT NULL,
  `letter_ref_no` varchar(255) NULL DEFAULT NULL,
  `letter_date` date NOT NULL,
  `received_date` date NULL DEFAULT NULL,
  `received_by` varchar(255) NULL DEFAULT NULL,
  `attention_to` varchar(255) NOT NULL,
  `subject` text NULL DEFAULT NULL,
  `response_required` varchar(255) NULL DEFAULT NULL,
  `reference` text NULL DEFAULT NULL,
  `pic_letter_out` text NULL DEFAULT NULL,
  `attachment` text NULL DEFAULT NULL,
  `attachment_type` varchar(255) NULL DEFAULT NULL,
  `cc_to_letter_out` varchar(255) NULL DEFAULT NULL,
  `delivery_date` date NULL DEFAULT NULL,
  `document_control_date` date NULL DEFAULT NULL,
  `assign_to` text NULL DEFAULT NULL,
  `for_reference` text NULL DEFAULT NULL,
  `due_date` date NOT NULL,
  `engineer_ref_no` varchar(255) NULL DEFAULT NULL,
  `engineer_res_date` varchar(255) NULL DEFAULT NULL,
  `rev` varchar(10) NULL DEFAULT '0',
  `status` varchar(255) NOT NULL,
  `description` text NULL DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_letters_type_index`(`type`) USING BTREE,
  INDEX `patimone_letters_document_no_index`(`document_no`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_letters
-- ----------------------------
BEGIN;
INSERT INTO `patimone_letters` (`id`, `package_id`, `type`, `letter_source_id`, `correspondence_type`, `document_no`, `letter_ref_no`, `letter_date`, `received_date`, `received_by`, `attention_to`, `subject`, `response_required`, `reference`, `pic_letter_out`, `attachment`, `attachment_type`, `cc_to_letter_out`, `delivery_date`, `document_control_date`, `assign_to`, `for_reference`, `due_date`, `engineer_ref_no`, `engineer_res_date`, `rev`, `status`, `description`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES ('047b4454-3628-42ac-926f-8a938160c3c8', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', 'a06e019b-38fe-4c2f-adf1-a481493303ce', '1', 'PTRPWJ/PTBP6/ENGR/24/T-0904a', '2024-04-16', '2024-04-16', NULL, 'PatimOne Consul', 'PTBP6-T-0904a - Quality Inspection Report for Prestessing and Concrete Casting PC Deck Slab Fabrication (15th Week) PT. Wika Beton, Rev. 01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"b47a9195-0c03-47ad-b3e1-cfd48bbae0ae\",\"841ce06d-97cf-4019-ab78-939a3632df98\",\"ee289d04-04f0-4af9-a8d0-33627a50025c\",\"92ef6802-2a8c-44eb-8ace-286a7aabda58\"]', '[\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"a07d383d-40ba-4fef-9873-48f7ee128c68\",\"b47a9195-0c03-47ad-b3e1-cfd48bbae0ae\",\"f7f97e04-6c30-4656-b6f1-6347e6d580cd\",\"144656ca-3ea2-4469-b9ec-f56fe13f7815\",\"79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb\",\"f1aacafd-e7fc-4136-89f5-1c896abd2c79\"]', '2024-04-16', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-16 06:19:28', '2024-04-16 07:24:40'), ('0ff75424-5bf4-4c66-8679-c44f99b903ff', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-NO', '2024-04-17', '2024-04-17', NULL, 'PatimOne Consul', 'PTRPWJ-PTBP6-ENGR-24-L-418 - P6-CLM-CON-01 Claim for Financing Charges Due to Delayed Payment of IPC No.5 (Monthly Statement No. 4)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb\",\"b47a9195-0c03-47ad-b3e1-cfd48bbae0ae\",\"cc282b3f-18c9-4cb0-936d-a0a12c6c09dc\",\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"8ece5de4-70c9-4fd9-b35d-5c2d6d02cc43\"]', NULL, '2024-04-17', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-17 02:07:53', '2024-04-17 02:53:42'), ('13a7e871-6b78-4431-ae7b-2c0b5e377f99', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '', '', '000000', NULL, '2024-04-26', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26', '2024-04-26', '', NULL, '2024-04-26', NULL, NULL, '0', '0', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-26 10:04:21', '2024-04-26 10:04:21'), ('23f8f501-309c-461b-8896-6384cac7120a', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '3be10b2c-2c42-44c2-982c-1f8fe0cdc796', '061838de-218b-49be-bdf4-d8ace6bfb41d', '1', 'PTRPWJ/PTBP6/ENGR/24/L-029', '2024-04-19', '2024-04-19', NULL, 'PatimOne Consul', 'Re Instruction for Providing Alternative Catalogue for Employer\'s and Engineer\'s Vehicles (Item No. 1.4.4.1 and Item 1.4.4.3)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0a1a92a6-3985-43cf-a63d-3c497355d919,12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99', '05f94152-78ad-40f2-b4c4-f17479a1fb65,5729c63a-a992-4472-a3b2-6d02bea44428,70599645-61bf-4ce3-94f3-4a82049865bb', '2024-04-19', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-19 02:31:36', '2024-04-19 03:54:38'), ('249a60cf-607a-4500-9f91-a4b12db8d637', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-014', '2024-04-17', '2024-04-17', NULL, 'PatimOne Consul', 'tesa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"05f94152-78ad-40f2-b4c4-f17479a1fb65\",\"0f1b8674-66d3-442c-8bdf-784af5317bff\"]', '[\"0f1b8674-66d3-442c-8bdf-784af5317bff\",\"47a2fa7d-e863-4a66-806b-08f94e9d7bd2\",\"12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99\"]', '2024-04-17', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-17 03:13:45', '2024-04-17 04:47:18'), ('3c7eef8e-5ec2-4273-9453-ba70486d6371', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '', '', '000000', NULL, '2024-05-02', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-02', '2024-05-02', '', NULL, '2024-05-02', NULL, NULL, '0', '0', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-02 13:00:02', '2024-05-02 13:00:02'), ('43e46d3e-0a35-4d5c-9a18-a301564c31e7', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-005', '2024-04-05', '2024-04-05', NULL, 'Patimone Consul', 'Assign to inspect the CDM work', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"8fe19a15-80b3-4c41-8e28-832af759d425\",\"92ef6802-2a8c-44eb-8ace-286a7aabda58\"]', NULL, '2024-04-05', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-05 04:19:51', '2024-04-05 04:24:30'), ('46aeded2-0cf2-4ed6-bc3f-4dd539805f22', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-010', '2024-04-25', '2024-04-25', NULL, 'PatimOne Consul', 'Re Engineer & Contractor Site Offices Renovation Works Schedule', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0a1a92a6-3985-43cf-a63d-3c497355d919,68cfc76f-afef-4b0e-bdde-638d61c3b0cc', '5729c63a-a992-4472-a3b2-6d02bea44428,f7f97e04-6c30-4656-b6f1-6347e6d580cd,92ef6802-2a8c-44eb-8ace-286a7aabda58', '2024-04-25', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-25 08:52:09', '2024-04-25 09:06:39'), ('4f60959e-ebfe-4fc0-8d99-7d2de9299d00', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-030', '2024-04-19', '2024-04-19', NULL, 'PatimOne Consul', 'Request for Confirmation Regarding M&E Works at Bridge and Backup Yard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '05f94152-78ad-40f2-b4c4-f17479a1fb65,404acab7-3c57-4cfd-b6dc-52f56c2c61ac,68cfc76f-afef-4b0e-bdde-638d61c3b0cc', '530b6b77-8009-4f00-ac83-469f77eacebd,a93812ed-85cd-4275-be7b-8d578bb99354,90012eca-0a5e-4ec7-ac5e-f3a04006df25', '2024-04-19', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-19 03:55:14', '2024-04-19 03:56:19'), ('50206bd0-702b-4a67-ab4d-3e46710cc035', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '3be10b2c-2c42-44c2-982c-1f8fe0cdc796', '061838de-218b-49be-bdf4-d8ace6bfb41d', '1', 'PTRPWJ/PTBP6/ENGR/24/T-0042d', '2024-04-29', '2024-04-29', 'hardcopy', 'PatimOne Consul', 'Method Statement for CDM and CPM Trial Mix, Rev.04', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '841ce06d-97cf-4019-ab78-939a3632df98,5729c63a-a992-4472-a3b2-6d02bea44428', 'b47a9195-0c03-47ad-b3e1-cfd48bbae0ae,90012eca-0a5e-4ec7-ac5e-f3a04006df25', '2024-04-29', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-29 09:43:19', '2024-04-29 10:04:58'), ('555a6b11-31e5-42e3-a188-f99b54ad3456', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '972a2380-6fb3-430f-a464-f8b98bf52a4c', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'UM.006/04/IV/PKG6-PTB/2024', '2024-04-04', '2024-04-04', NULL, 'Patimone Consul', 'Contractor\'s Health & Safety (Accident Prevention) Officer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0f1b8674-66d3-442c-8bdf-784af5317bff', NULL, '2024-04-04', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-04 10:34:57', '2024-04-04 10:49:20'), ('579d51ab-5a68-487b-80fd-cbc21de7259a', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '', '', '000000', NULL, '2024-04-16', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-16', '2024-04-16', '', NULL, '2024-04-16', NULL, NULL, '0', '0', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-16 11:50:12', '2024-04-16 11:50:12'), ('587087d2-09e6-49ed-844e-5a74287e960c', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', 'a31d10a1-2035-4616-81df-580a6905b079', '1', 'PTRPWJ/PTBP6/DGST/24/L-047', '2024-04-17', '2024-04-17', NULL, 'PatimOne Consul', 'example letter from contractor to DGST', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"0a1a92a6-3985-43cf-a63d-3c497355d919\",\"0f1b8674-66d3-442c-8bdf-784af5317bff\",\"144656ca-3ea2-4469-b9ec-f56fe13f7815\",\"8ece5de4-70c9-4fd9-b35d-5c2d6d02cc43\"]', '2024-04-17', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-17 03:01:56', '2024-04-17 03:05:46'), ('59e9cc20-111c-44e0-9211-f42acb5c70f6', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/23/L-012', '2023-01-02', '2023-01-02', NULL, 'Patimone Consul', 're-Request for Subcontractor Approval for Survey Works', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '144656ca-3ea2-4469-b9ec-f56fe13f7815', NULL, '2023-01-02', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-05 02:24:00', '2024-04-05 02:29:58'), ('5f9b6ba9-54a4-474e-8bb6-58b8f8b3ccfb', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '', '', '000000', NULL, '2024-04-18', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-18', '2024-04-18', '', NULL, '2024-04-18', NULL, NULL, '0', '0', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-04-18 10:03:17', '2024-04-18 10:03:17'), ('60414075-ff7a-4add-8299-f25545437edc', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '3be10b2c-2c42-44c2-982c-1f8fe0cdc796', '061838de-218b-49be-bdf4-d8ace6bfb41d', '1', 'PTRPWJ/PTBP6/ENGR/24/L-343', '2024-04-24', '2024-04-24', NULL, 'PatimOne Consul', 'Response to Request for Comparison Table of Alternative 1 & 2 of Interface Package 7', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '05f94152-78ad-40f2-b4c4-f17479a1fb65,0f1b8674-66d3-442c-8bdf-784af5317bff,12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99', '05f94152-78ad-40f2-b4c4-f17479a1fb65,68cfc76f-afef-4b0e-bdde-638d61c3b0cc,70599645-61bf-4ce3-94f3-4a82049865bb,97da0c50-a1ad-4a2f-9645-6c1810d0d2c0', '2024-04-24', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-24 07:17:48', '2024-04-24 10:56:22'), ('6ec09777-f80f-4a3c-986d-c87e9d352a19', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-0124', '2024-04-16', '2024-04-16', NULL, 'PatimOne Consul', 'test letter to KSOP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"05f94152-78ad-40f2-b4c4-f17479a1fb65\",\"12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99\"]', '[\"05f94152-78ad-40f2-b4c4-f17479a1fb65\",\"0a1a92a6-3985-43cf-a63d-3c497355d919\",\"0f1b8674-66d3-442c-8bdf-784af5317bff\",\"42f3b046-c24d-47a3-a1c6-f371c17d3b4e\"]', '2024-04-16', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-16 08:48:06', '2024-04-16 11:49:16'), ('8066f1cf-46fe-4d6c-a110-e4106d4d8935', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-16532', '2024-04-16', '2024-04-16', NULL, 'PatimOne Consul', 'this is the test insert data after long holiday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"a07d383d-40ba-4fef-9873-48f7ee128c68\"]', '[\"79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb\",\"c2f5e0e9-895e-4e0f-b23e-c69ac86821ef\"]', '2024-04-16', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-16 04:39:25', '2024-04-16 04:43:39'), ('89cb6d68-9af0-402d-ae4b-648fbf6b0cf2', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-011', '2024-04-24', '2024-04-24', NULL, 'PatimOne Consul', 'Request for Subcontractor Approval for Soil Investigation Work', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ee289d04-04f0-4af9-a8d0-33627a50025c,b47a9195-0c03-47ad-b3e1-cfd48bbae0ae,42f3b046-c24d-47a3-a1c6-f371c17d3b4e,90012eca-0a5e-4ec7-ac5e-f3a04006df25,144656ca-3ea2-4469-b9ec-f56fe13f7815', 'd91b1b3a-7882-4b6c-9356-5ca597a568ec,a07d383d-40ba-4fef-9873-48f7ee128c68', '2024-04-24', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-24 01:55:37', '2024-04-24 01:59:29'), ('986e41ab-57ca-45d1-b36f-ec922c1cbaa9', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-NO', '2024-04-05', '2024-04-05', NULL, 'asasa', 'test for get error access', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"530b6b77-8009-4f00-ac83-469f77eacebd\",\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"144656ca-3ea2-4469-b9ec-f56fe13f7815\"]', NULL, '2024-04-05', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-05 03:49:27', '2024-04-05 04:00:41'), ('bdbc6f6d-976d-468c-833c-97d0e3027f69', '', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '088f766c-8349-4b54-b41d-30c693a1b3fe', '1', 'asasasasas', '2024-04-04', '2024-04-04', NULL, 'a', 'asasasasasas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0a1a92a6-3985-43cf-a63d-3c497355d919', NULL, '2024-04-04', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-04 08:09:38', '2024-04-04 10:28:06'), ('c8a0ff82-0967-4cab-a8c7-0d81e559d60d', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-012', '2024-04-19', '2024-04-19', NULL, 'PatimOne Consul', 're-Request for Subcontractor Approval for Survey Works', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '05f94152-78ad-40f2-b4c4-f17479a1fb65,12ffe7a4-acb0-4261-b10d-8bfe8b6f5d99,cda42281-3e61-4988-9d83-26d3b19718e2,90012eca-0a5e-4ec7-ac5e-f3a04006df25', '79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb,c2f5e0e9-895e-4e0f-b23e-c69ac86821ef,a07d383d-40ba-4fef-9873-48f7ee128c68,d91b1b3a-7882-4b6c-9356-5ca597a568ec', '2024-04-19', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-19 08:15:51', '2024-04-19 09:02:21'), ('c8d4eb59-2260-451a-a1ff-ab91205a68ba', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-0711', '2024-04-18', '2024-04-18', NULL, 'PatimOne Consul', 'L-050 - Re-Request for Clarification of Hydrographic Survey Equipment at Disposal Area', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"cda42281-3e61-4988-9d83-26d3b19718e2\",\"79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb\",\"c2f5e0e9-895e-4e0f-b23e-c69ac86821ef\",\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"b47a9195-0c03-47ad-b3e1-cfd48bbae0ae\"]', '[\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"a07d383d-40ba-4fef-9873-48f7ee128c68\",\"9a127c07-d963-465c-8cca-d49f56d1f791\",\"ac67bda9-9a59-4e1e-a06e-23c0a143b213\"]', '2024-04-18', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-18 06:21:20', '2024-04-18 09:39:10'), ('d54f5365-5101-474a-8d3a-049129d7f609', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', 'a06e019b-38fe-4c2f-adf1-a481493303ce', '1', 'PTRPWJ/PTBP6/ENGR/23/T-0051', '2023-02-09', '2023-02-09', 'hardcopy', 'PatimOne Consul', 'Shop Drawing for Coping Concrete & Precast Coping', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '92ef6802-2a8c-44eb-8ace-286a7aabda58,ee289d04-04f0-4af9-a8d0-33627a50025c,841ce06d-97cf-4019-ab78-939a3632df98,90012eca-0a5e-4ec7-ac5e-f3a04006df25,144656ca-3ea2-4469-b9ec-f56fe13f7815', 'd91b1b3a-7882-4b6c-9356-5ca597a568ec,a07d383d-40ba-4fef-9873-48f7ee128c68,b47a9195-0c03-47ad-b3e1-cfd48bbae0ae,79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', '2023-02-09', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-05-02 13:02:21', '2024-05-02 13:08:41'), ('e4a8ee6c-e98f-414c-94c6-8808ddcbb282', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-014', '2024-05-02', '2024-05-02', 'email', 'PatimOne Consul', 'Test for submiting document', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '05f94152-78ad-40f2-b4c4-f17479a1fb65,404acab7-3c57-4cfd-b6dc-52f56c2c61ac,68cfc76f-afef-4b0e-bdde-638d61c3b0cc', '0a1a92a6-3985-43cf-a63d-3c497355d919,70599645-61bf-4ce3-94f3-4a82049865bb,79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', '2024-05-02', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-05-02 04:07:37', '2024-05-02 04:35:51'), ('e5abad1f-fd2b-4a8c-8e8b-20c58fb43167', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '3be10b2c-2c42-44c2-982c-1f8fe0cdc796', '061838de-218b-49be-bdf4-d8ace6bfb41d', '1', 'PTRPWJ/PTBP6/ENGR/24/L-394', '2024-04-23', '2024-04-23', NULL, 'PatimOne Consul', 'Notification for the Mass Production of Steel Pipe Piles (SPP) (Upper 2+Lower) Landside', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '05f94152-78ad-40f2-b4c4-f17479a1fb65,0a1a92a6-3985-43cf-a63d-3c497355d919', '90012eca-0a5e-4ec7-ac5e-f3a04006df25,a07d383d-40ba-4fef-9873-48f7ee128c68,d91b1b3a-7882-4b6c-9356-5ca597a568ec', '2024-04-23', NULL, NULL, '16', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-23 09:43:49', '2024-04-23 12:49:12'), ('ea997f01-bbbe-4385-8dac-caa692500c16', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-NO', '2024-04-05', '2024-04-05', NULL, 'ptmbn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"0a1a92a6-3985-43cf-a63d-3c497355d919\"]', NULL, '2024-04-05', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-05 04:01:55', '2024-04-05 04:02:27'), ('eb9eff80-65a0-42c7-8b5c-8005e199d9f7', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '3be10b2c-2c42-44c2-982c-1f8fe0cdc796', '061838de-218b-49be-bdf4-d8ace6bfb41d', '1', 'PTRPWJ/PTBP6/KSOP/24/L-0187', '2024-04-22', '2024-04-22', NULL, 'PatimOne Consul', 'test', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '144656ca-3ea2-4469-b9ec-f56fe13f7815,79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb', '90012eca-0a5e-4ec7-ac5e-f3a04006df25,b47a9195-0c03-47ad-b3e1-cfd48bbae0ae', '2024-04-22', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-22 05:05:41', '2024-04-22 10:57:39'), ('ed833224-fde9-42cc-8667-fcd69004a6f6', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-0001', '2024-04-05', '2024-04-05', NULL, 'Patimone Consul', 'Letter for KSOP from Contractor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '144656ca-3ea2-4469-b9ec-f56fe13f7815', NULL, '2024-04-05', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-05 02:15:58', '2024-04-05 02:19:58'), ('edc8c104-f187-42ad-8055-1e5ee2d1527e', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-0004', '2024-04-17', '2024-04-17', NULL, 'PatimOne Consul', 'Contractor\'s Health & Safety (Accident Prevention) Officer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"a07d383d-40ba-4fef-9873-48f7ee128c68\"]', '[\"79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb\",\"c2f5e0e9-895e-4e0f-b23e-c69ac86821ef\",\"c7019bb4-c45d-4ecd-bf66-68339e416063\"]', '2024-04-17', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-17 10:27:34', '2024-04-17 10:53:30'), ('f3a30950-9620-4997-894c-fc3cd9bb5ada', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-NO', '2024-04-17', '2024-04-17', NULL, 'PatimOne Consul', 'PTMB-TWWHA-RES-2024-0320a - Method Statement for Rock Mound & SPSP Scarps Removal of Temporary Berthing Facility - 2 R1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"97da0c50-a1ad-4a2f-9645-6c1810d0d2c0\",\"9a127c07-d963-465c-8cca-d49f56d1f791\",\"a93812ed-85cd-4275-be7b-8d578bb99354\"]', '[\"42f3b046-c24d-47a3-a1c6-f371c17d3b4e\"]', '2024-04-17', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-17 11:00:46', '2024-04-17 11:27:20'), ('f6dbc4ca-2596-4945-923e-7997fcf7f575', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '44ece0fb-789a-4895-8dcb-cefcdf23fab7', '1', 'PTRPWJ/PTBP6/KSOP/24/L-012', '2024-04-05', '2024-04-05', NULL, 'KSOP', 'test for', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"a07d383d-40ba-4fef-9873-48f7ee128c68\",\"144656ca-3ea2-4469-b9ec-f56fe13f7815\",\"79578cb2-4fc3-4ce1-88d6-b13ebcddc5fb\"]', NULL, '2024-04-05', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-05 04:40:47', '2024-04-05 04:42:48'), ('f9d0a95b-6945-424b-875a-6c24e88c5dab', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-0015', '2024-04-18', '2024-04-18', NULL, 'PatimOne Consul', 'PTRPWJ-PTBP6-ENGR-24-L-394 - Notification for the Mass Production of Steel Pipe Piles (SPP) (Upper 2+Lower) Landside', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"05f94152-78ad-40f2-b4c4-f17479a1fb65\",\"0f1b8674-66d3-442c-8bdf-784af5317bff\",\"144656ca-3ea2-4469-b9ec-f56fe13f7815\"]', '[\"0a1a92a6-3985-43cf-a63d-3c497355d919\",\"a07d383d-40ba-4fef-9873-48f7ee128c68\",\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\"]', '2024-04-18', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-18 03:27:32', '2024-04-18 04:03:11'), ('fb9f7794-5bc5-4bb5-8c10-4c1d235f6143', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '', '', '000000', NULL, '2024-05-03', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-03', '2024-05-03', '', NULL, '2024-05-03', NULL, NULL, '0', '0', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, '2024-05-03 08:14:16', '2024-05-03 08:14:16'), ('fe5a4fed-d6b3-4335-b599-89a7258aa760', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', '944c0e65-9b02-4cf4-aa03-72cd13405beb', '1', 'PTRPWJ/PTBP6/ENGR/24/L-010', '2024-04-05', '2024-04-05', NULL, 'patimone', 'Re Engineer & Contractor Site Offices Renovation Works Schedule', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"d91b1b3a-7882-4b6c-9356-5ca597a568ec\",\"90012eca-0a5e-4ec7-ac5e-f3a04006df25\",\"a07d383d-40ba-4fef-9873-48f7ee128c68\",\"144656ca-3ea2-4469-b9ec-f56fe13f7815\"]', NULL, '2024-04-05', NULL, NULL, '0', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-05 04:27:52', '2024-04-05 04:40:12'), ('9821a3a8-3f5d-45e4-9451-61ca13c6a010', '-', 'IN', '6fde5d92-13e9-4999-8bb5-0b6c5e8543a7', 'a06e019b-38fe-4c2f-adf1-a481493303ce', '1', 'PTRPWJ/PTBP6/ENGR/24/T-0277c', '2024-06-05', '2024-06-05', 'hardcopy', 'PatimOne Consul', 'PTBP6-T-0277c - Final Report of Field Trial for Cement Deep Mixing (CDM), Rev. 3', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05', NULL, NULL, '3', '1', NULL, 'e02613cb-5de9-4304-8a35-4266d1cc08fa', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, '2024-06-05 03:59:36', '2024-06-05 04:11:06'), ('0bca9113-bdc6-4305-af6c-884adc2f496d', '-', 'IN', '-', '', '000000', NULL, '2024-06-05', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05', '2024-06-05', NULL, NULL, '2024-06-05', NULL, NULL, '0', '0', NULL, 'e02613cb-5de9-4304-8a35-4266d1cc08fa', NULL, NULL, '2024-06-05 09:11:45', '2024-06-05 09:11:45');
COMMIT;

-- ----------------------------
-- Table structure for patimone_master_items
-- ----------------------------
DROP TABLE IF EXISTS `patimone_master_items`;
CREATE TABLE `patimone_master_items`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_code` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_status` varchar(1) NOT NULL DEFAULT '1',
  `item_description` longtext NULL DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_master_items_item_code_index`(`item_code`) USING BTREE,
  INDEX `patimone_master_items_item_category_index`(`item_category`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_master_items
-- ----------------------------
BEGIN;
INSERT INTO `patimone_master_items` (`id`, `item_code`, `item_name`, `item_category`, `item_status`, `item_description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (1, 'engineer', 'Engineer', 'user-type', '1', NULL, '1', NULL, NULL, NULL), (2, 'supporting', 'Supporting', 'user-type', '1', NULL, '1', NULL, NULL, NULL), (3, 'inspector', 'Inspector', 'user-type', '1', NULL, '1', NULL, NULL, NULL), (4, 'A', 'for your Approval', 'response-request', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL), (5, 'B', 'for your Information & Record', 'response-request', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL), (6, 'C', 'for your Clarification', 'response-request', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL), (7, 'D', 'for your Selection', 'response-request', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL), (8, 'E', 'for Variation', 'response-request', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL), (9, 'F', 'Other (fill manually)', 'response-request', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL), (10, 'email', 'email', 'receive-letter-by', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL), (11, 'hardcopy', 'hardcopy', 'receive-letter-by', '1', NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for patimone_migrations
-- ----------------------------
DROP TABLE IF EXISTS `patimone_migrations`;
CREATE TABLE `patimone_migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_migrations
-- ----------------------------
BEGIN;
INSERT INTO `patimone_migrations` (`id`, `migration`, `batch`) VALUES (1, '2014_10_12_000000_create_users_table', 1), (2, '2014_10_12_100000_create_password_resets_table', 1), (3, '2019_08_19_000000_create_failed_jobs_table', 1), (4, '2019_12_14_000001_create_personal_access_tokens_table', 1), (5, '2023_05_26_065725_create_rfis_table', 1), (6, '2023_05_26_094011_create_positions_table', 1), (7, '2023_06_10_071217_create_works_table', 1), (8, '2023_07_13_033311_create_engineers_table', 1), (9, '2023_07_18_023820_add_column_to_engineers', 1), (10, '2023_07_20_102257_create_incoming_letters_table', 1), (11, '2023_07_21_041604_package', 1), (12, '2023_07_25_073108_create_master_items_table', 1), (13, '2023_07_25_101226_create_letter_files_table', 1), (14, '2023_07_25_101959_create_trigger_letter', 1), (15, '2023_08_08_024104_create_contacts_table', 1), (16, '2024_01_11_075033_transmittal', 1), (17, '2024_02_07_091731_create_assignments_table', 1), (18, '2024_03_13_082036_create_letters_table', 1), (19, '2024_03_13_082538_create_letter_sources_table', 1), (20, '2024_03_13_100258_create_correspondence_types_table', 1), (21, '2024_03_18_034241_email_engineers', 1), (22, '2024_03_19_034055_create_type_of_actions_table', 1), (23, '2024_03_21_133405_document_reference', 1), (24, '2024_03_28_081917_add_template_to_correspondence_type', 2), (25, '2024_03_28_083444_add_package_id_attention_to_correspondence_type', 3), (26, '2024_04_02_034542_create_user_accesses_table', 4), (29, '2024_04_04_072247_create_attachment_files_table', 5), (35, '2024_04_05_032202_create_assignment_letters_table', 10), (31, '2024_04_29_101811_create_documenttypes_table', 7), (32, '2024_05_03_064632_create_permission_tables', 8), (33, '2024_05_08_083326_create_permission_tables', 9), (34, '2024_06_05_023133_create_sessions_table', 9);
COMMIT;

-- ----------------------------
-- Table structure for patimone_model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `patimone_model_has_permissions`;
CREATE TABLE `patimone_model_has_permissions`  (
  `permission_id` char(36) NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` char(36) NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `patimone_model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `patimone_permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB;

-- ----------------------------
-- Records of patimone_model_has_permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `patimone_model_has_roles`;
CREATE TABLE `patimone_model_has_roles`  (
  `role_id` char(36) NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` char(36) NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `patimone_model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `patimone_roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB;

-- ----------------------------
-- Records of patimone_model_has_roles
-- ----------------------------
BEGIN;
INSERT INTO `patimone_model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES ('d0a051d6-cd83-48e5-9948-71852be183a8', 'App\\Models\\User', 'e02613cb-5de9-4304-8a35-4266d1cc08fa'), ('c3e8e44c-7256-49bd-b328-063ba17ca857', 'App\\Models\\User', 'fcb57b25-4945-40aa-aa96-f6342292427c');
COMMIT;

-- ----------------------------
-- Table structure for patimone_packages
-- ----------------------------
DROP TABLE IF EXISTS `patimone_packages`;
CREATE TABLE `patimone_packages`  (
  `id` char(36) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `total_days` int(11) NULL DEFAULT NULL,
  `start_date` date NULL DEFAULT NULL,
  `end_date` date NULL DEFAULT NULL,
  `description` text NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT '1:active, 0:inActive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_packages_id_index`(`id`) USING BTREE,
  INDEX `patimone_packages_package_name_index`(`package_name`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_packages
-- ----------------------------
BEGIN;
INSERT INTO `patimone_packages` (`id`, `package_name`, `total_days`, `start_date`, `end_date`, `description`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'Package 6', 1300, '2022-01-01', '2025-12-31', 'CONTAINER TERMINAL NO.2 CONSTRUCTION', '1', NULL, '1', NULL, NULL, NULL), ('26e8083e-e215-47d9-aa67-8bce6b9b5a9e', 'All Package', 0, '2022-01-01', '2025-12-31', 'All Package', '1', NULL, '1', NULL, NULL, NULL), ('62116337-ba4d-470d-8478-a41c49a9769d', 'Package 5', 1000, '2022-01-01', '2025-12-31', 'CAR TERMINAL CONSTRUCTION', '1', NULL, '1', NULL, NULL, NULL), ('92c1e486-5bad-458f-beca-2138c0ed1ea6', 'Package 2', 1000, '2018-01-01', '2021-12-31', '', '0', NULL, '1', NULL, NULL, NULL), ('ce2194fd-cf80-41fe-a363-9cb596e48515', 'Package 3', 500, '2019-01-01', '2021-12-31', '', '0', NULL, '1', NULL, NULL, NULL), ('e197936d-0279-414e-b718-8797b9a29603', 'Package 4', 0, '2019-01-01', '2021-12-31', '', '0', NULL, '1', NULL, NULL, NULL), ('fbecdd8f-a431-4c6d-b3db-9d61ee0f8ae6', 'Package 1', 1000, '2018-01-01', '2021-12-31', '', '0', NULL, '1', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for patimone_password_resets
-- ----------------------------
DROP TABLE IF EXISTS `patimone_password_resets`;
CREATE TABLE `patimone_password_resets`  (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `patimone_password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_permissions
-- ----------------------------
DROP TABLE IF EXISTS `patimone_permissions`;
CREATE TABLE `patimone_permissions`  (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `patimone_permissions_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB;

-- ----------------------------
-- Records of patimone_permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `patimone_personal_access_tokens`;
CREATE TABLE `patimone_personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable` varchar(255) NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `patimone_personal_access_tokens_token_unique`(`token`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_positions
-- ----------------------------
DROP TABLE IF EXISTS `patimone_positions`;
CREATE TABLE `patimone_positions`  (
  `id` char(36) NOT NULL,
  `position_code` varchar(255) NOT NULL,
  `position_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL COMMENT 'Engineer,inspector,SS,other',
  `description` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_positions
-- ----------------------------
BEGIN;
INSERT INTO `patimone_positions` (`id`, `position_code`, `position_name`, `category`, `description`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('003b3ac6-5e00-4581-80cf-5a87f1eff02a', 'B13', 'Survey Expert (Typo-Hydro)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('0b078434-4ffb-4432-8de6-d4848357abc1', 'C11.1', 'General Affair Secretary', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('17af032e-be51-4439-b839-ed670fe1e6bf', 'B06', 'Civil Engineer-2 (Reclamation)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('1987eb8b-7a19-48be-8e23-60fcd32c4345', 'B99', 'QC Staff', 'Supporting', NULL, NULL, '1', NULL, NULL, NULL), ('1bb65fc3-6584-4c3f-bb74-1443c2a36e19', 'A-14', 'Port Security Expert (ISPS)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('1fbf031a-f214-4072-96d0-e159a7a1d41e', 'A-20', 'Quality Control (Port)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('245fb955-5102-4ebc-ab82-caa24e44e4f3', 'B00', 'Assistant Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('273dba8a-da7f-497b-89ab-8d3231c86df1', 'A-19', 'Environmental Expert (Social)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('296e6ecb-b2bb-46c5-8f9c-1c654c21c1ce', 'B2.1', 'Dredging Engineer 1 (PKG 6)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('2a3ee77b-b716-4f91-ae3e-82f107be92d8', 'B10.3', 'Co-team Leader', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('33322cb2-9ed7-4119-a3a7-5275cbeca5b2', 'C10', 'Office Boy', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('356ed621-4e2a-496c-91c6-3b12c0835577', 'A-08', 'Electrical Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('3b96ff75-8494-40f4-a658-a25403fcecb0', 'B08.1', 'Electrical Engineer HV', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('3d3397ae-7e33-47a1-8e1d-7116cde65d48', 'A-15', 'Financial Expert', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('3d3f2cdc-cf4b-444f-9ffc-5fa30c2d963c', 'A-06', 'Soil Mechanic Engineer-2', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('43397b79-4e57-4b91-b5a6-64f4f8d6dfaf', 'B11', 'Construction Planning Expert', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('46682c45-81dc-44d1-87a6-80b078cc7ea5', 'B14', 'Geotechnical Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('50c526bd-50d7-4b29-85d5-01b6b98e3767', 'C09', 'Office Boy', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('588ec0ec-c05e-4f53-a155-1eb183f92425', 'B07.1', 'Mechanical Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('5b507bf5-1f34-408b-b31d-f32e6f0c855a', 'B05', 'Civil Engineer-1 (Reclamation)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('5c6d279b-b312-4101-8316-98d6d5284a0f', 'A-22', 'Site Coordinator', 'engineer', NULL, NULL, 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-17 02:57:50', '2024-04-17 02:57:50'), ('5e3d8f86-cd64-40aa-93e8-d20069a74e8d', 'B41', 'Reporting Specialist', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('5f1a3a87-42a2-48b6-8d08-0445d0a4b8ed', 'C01', 'Office manager', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('74f873a2-dfc2-418a-920d-cfb87d9c3de6', 'A-09', 'Building Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('7719a58f-dac3-4855-93ce-00a005bd7d7a', 'C03', 'Billingual Secreatary', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('79efa929-83e5-4504-a1c1-dcad3b252bf9', 'B01', 'Local Team Leader/Senior structure Engineer (PKG-5/PKG-6)', 'engineer', NULL, NULL, '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-16 12:16:19'), ('7df73d38-3640-4782-b889-c2278694df2c', 'C06', 'CAD Operator', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('83687428-04bc-452a-9898-6227c0c039dc', 'A-04', 'Marine Structure Engineer 2 ( Car Terminal)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('8aad550f-6732-4633-b890-2bcf24f61e87', 'B19', 'Safety Specialist', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('8f29139d-f8d1-4b3d-8b88-43133acd29ce', 'A-17', 'Junior Coastal Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('9473d8e0-2fe4-4010-bbef-051558876d41', 'C13.1', 'Document Controller 2', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('947463a0-202e-4f38-9fd9-3f2017d468c8', 'C12.1', 'Document Controller 1', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('99aafa6e-4daa-4656-acfd-cd1e8c3e9412', 'B06.1', 'Civil Engineer 2 (Yard PKG5)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('9c5f18f3-30b1-4de6-95b0-e595eeb29ac1', 'B2.2', 'Dredging Engineer 2', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('9f984858-e504-4b23-bf9e-9ff94787dd10', 'A-21', 'Safety Special', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('a66b48f0-e0a7-47da-9b56-b28583427c3d', 'A-05', 'Soil Mechanic Engineer 1', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('a9d6abd2-852b-4c78-b4b0-127f4d063c37', 'C04', 'Document Control', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('aaaf7b92-63fa-4579-9028-283f7582f05e', 'B21', 'Quantity Surveyor (Port)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('ae348858-fb0b-4be2-9ecb-4beea1354871', 'A-03', 'Marine Structure Engineer 1 (Contrainer Terminal)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('aed77c91-9294-4649-b621-7bda68328706', 'B04', 'Marine Structural Engineer-2', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('b9dac3b4-c631-4860-9edd-9700130a6c1a', 'A-02', 'Project Manager 1', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('c19f8aa6-de99-45df-971c-52268184ef88', 'B15', 'Claim Expert PKG 5 & PKG 6', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('c3d51c24-22e4-40ec-9172-777c6686b898', 'A-18', 'Environmental Expert (Natural)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('d60749a6-9f9a-4321-a9cc-50c882ec716c', 'A-16', 'Senior Coastal Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('da919b85-616d-418f-a79e-20968093fdcb', 'B17', 'Environmental Expert (Natural)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('de6b10dc-fb5a-4c49-b69b-871c0282171e', 'C05', 'Cad operator', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('e0a03917-2ee4-4dfa-bd1e-7815a37bd581', 'B21.2', 'Quantity Surveyor (Port)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('e170facb-ca15-4466-88b3-9c5275e6dbc3', 'B03', 'Marine Structural Engineer 1', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('e7d74bec-e1a7-4ca3-a8fc-0103f6ec19d1', 'C07', 'CAD Operator', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('e842b815-a20f-400c-8298-b98184c0451b', 'B18', 'Environmental Expert (Social)', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('e8cb6138-2086-4be0-bedc-b84472ba2b19', 'C02', 'Billingual Secreatary', 'supporting', NULL, NULL, '1', NULL, NULL, NULL), ('ed082fc9-0487-4663-a0df-c6ee6af74989', 'A-02.1', 'Project Manager 2', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('f248e608-3cb4-4a05-ba2b-c5aded25f562', 'A-01', 'Project Director', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL), ('fec3046f-5c04-4478-b921-c8a7a12376ec', 'B14.1', 'Geotechnical Engineer', 'Engineer', NULL, NULL, '1', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for patimone_role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `patimone_role_has_permissions`;
CREATE TABLE `patimone_role_has_permissions`  (
  `permission_id` char(36) NOT NULL,
  `role_id` char(36) NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `patimone_role_has_permissions_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `patimone_role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `patimone_permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `patimone_role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `patimone_roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB;

-- ----------------------------
-- Records of patimone_role_has_permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_roles
-- ----------------------------
DROP TABLE IF EXISTS `patimone_roles`;
CREATE TABLE `patimone_roles`  (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `patimone_roles_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB;

-- ----------------------------
-- Records of patimone_roles
-- ----------------------------
BEGIN;
INSERT INTO `patimone_roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES ('13fbecb0-f1bf-4c42-ad4e-d3ed0f0f0865', 'user', 'web', '2024-06-05 03:12:52', '2024-06-05 03:12:52'), ('c3e8e44c-7256-49bd-b328-063ba17ca857', 'dc', 'web', '2024-06-05 03:12:52', '2024-06-05 03:12:52'), ('d087c9e8-2806-443d-a119-6cc90b043416', 'engineer', 'web', '2024-06-05 03:12:52', '2024-06-05 03:12:52'), ('d0a051d6-cd83-48e5-9948-71852be183a8', 'admin', 'web', '2024-06-05 03:12:52', '2024-06-05 03:12:52');
COMMIT;

-- ----------------------------
-- Table structure for patimone_sessions
-- ----------------------------
DROP TABLE IF EXISTS `patimone_sessions`;
CREATE TABLE `patimone_sessions`  (
  `id` varchar(255) NOT NULL,
  `user_id` char(60) NULL DEFAULT NULL,
  `ip_address` varchar(45) NULL DEFAULT NULL,
  `user_agent` text NULL DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_sessions_user_id_index`(`user_id`) USING BTREE,
  INDEX `patimone_sessions_last_activity_index`(`last_activity`) USING BTREE
) ENGINE = InnoDB;

-- ----------------------------
-- Records of patimone_sessions
-- ----------------------------
BEGIN;
INSERT INTO `patimone_sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('yD2g0Y6ucvUkHHqtWpwjeaObADLDn4ymfTcuqIGj', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiNVlHOXVTZlhjSURRUTEyOURtUTdvWGVWT1d3M3FIQWIza1huMDdzZCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvaW5jb21pbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7czozNjoiZTAyNjEzY2ItNWRlOS00MzA0LThhMzUtNDI2NmQxY2MwOGZhIjtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MTc1NzgzMzU7fXM6OToibGV0dGVyX2lkIjtzOjM2OiIwYmNhOTExMy1iZGM2LTQzMDUtYWY2Yy04ODRhZGMyZjQ5NmQiO30=', 1717582098);
COMMIT;

-- ----------------------------
-- Table structure for patimone_type_of_action
-- ----------------------------
DROP TABLE IF EXISTS `patimone_type_of_action`;
CREATE TABLE `patimone_type_of_action`  (
  `id` char(36) NOT NULL,
  `type_of_action` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `package_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_type_of_action
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for patimone_user_accesses
-- ----------------------------
DROP TABLE IF EXISTS `patimone_user_accesses`;
CREATE TABLE `patimone_user_accesses`  (
  `id` char(36) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `package_id` varchar(255) NOT NULL,
  `level` varchar(255) NULL DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_by` varchar(255) NULL DEFAULT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_user_accesses
-- ----------------------------
BEGIN;
INSERT INTO `patimone_user_accesses` (`id`, `user_id`, `package_id`, `level`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('b01eef47-2e74-4425-8b00-f8d71250d41f', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', '1e9fd856-6e81-470c-9835-c70ec9e69a6c', 'dc', '1', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-03 07:53:20', '2024-04-03 07:53:20'), ('e948795b-9301-4265-b4d9-818111888582', 'e02613cb-5de9-4304-8a35-4266d1cc08fa', '62116337-ba4d-470d-8478-a41c49a9769d', 'dc', '0', 'f46d2647-0ad1-448e-b800-a88e080c9fb8', NULL, '2024-04-03 10:03:43', '2024-04-03 10:03:43');
COMMIT;

-- ----------------------------
-- Table structure for patimone_users
-- ----------------------------
DROP TABLE IF EXISTS `patimone_users`;
CREATE TABLE `patimone_users`  (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `social_id` varchar(255) NULL DEFAULT NULL,
  `social_type` varchar(255) NULL DEFAULT NULL,
  `package_id` varchar(255) NULL DEFAULT NULL,
  `engineer_id` varchar(255) NULL DEFAULT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `patimone_users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_users
-- ----------------------------
BEGIN;
INSERT INTO `patimone_users` (`id`, `name`, `email`, `email_verified_at`, `social_id`, `social_type`, `package_id`, `engineer_id`, `level`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES ('fcb57b25-4945-40aa-aa96-f6342292427c', 'document controller P6', 'package6@patimoneconsul.id', NULL, NULL, NULL, NULL, NULL, 'user', '$2y$10$cYG6WXAeedDbMo6A5t1x8.GLw..YKJDnMDj1MvpIRuH9afgorIlb6', NULL, NULL, '2024-06-05 03:12:52', '2024-06-05 03:12:52'), ('e02613cb-5de9-4304-8a35-4266d1cc08fa', 'Umar Wirahadi', 'admin@localhost.com', NULL, NULL, NULL, NULL, NULL, 'user', '$2y$10$hse9FYZZ8UTICp/gPabOZ.onhCv1uKzgdVyOUlRXQ9UNrp/eTnRe.', NULL, NULL, '2024-06-05 03:12:52', '2024-06-05 03:12:52');
COMMIT;

-- ----------------------------
-- Table structure for patimone_works
-- ----------------------------
DROP TABLE IF EXISTS `patimone_works`;
CREATE TABLE `patimone_works`  (
  `id` char(36) NOT NULL,
  `item_no` varchar(100) NOT NULL,
  `pay_item` text NOT NULL,
  `unit` varchar(100) NOT NULL,
  `description` text NULL DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `patimone_works_id_item_no_index`(`id`, `item_no`) USING BTREE
) ENGINE = MyISAM;

-- ----------------------------
-- Records of patimone_works
-- ----------------------------
BEGIN;
INSERT INTO `patimone_works` (`id`, `item_no`, `pay_item`, `unit`, `description`, `status`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('049e4e20-2890-4634-b42d-44b985717788', '5.2.6.2)', 'Supply and install rubber ladder including accessories', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('08e2a17a-cc4f-477a-9f2b-1fa9996bf691', '5.3.8.3)', 'Supply and install fences including foundations and necessary accessories ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('0943b9d6-c536-4dff-abdf-e13111ab8b38', '5.1.14', 'Apron Concrete Placing apron concrete (Class B) 100mm thick including formwork, wire mesh, cutter joint, joint filler, sealing compound etc. ', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('09e404d3-e0c7-44fb-875a-71c62addce5e', '5.1.11', 'Deck Slab (In-situ concrete) Supply and placing of Class B concrete including support, welding, scaffolding, steel cover, drain pipe, formwork, reinforcement ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('0a49af9a-652b-420b-a8f3-87c1fed70b15', '5.1.13.2)', 'Supply and deliver PC deck slab (Type D)', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('0bab4662-4c3e-42d9-9bc7-f46f2d717c52', '5.3.2.2)', 'Supply and install Tie wire F100T (7 x ?11.1 ), L=22.5m and other accessories including sleeves, nuts, plates, washers, trumpet sheaths etc. for RAMP S-N ', 'set', NULL, '1', NULL, '1', NULL, NULL, NULL), ('11bb1caf-730a-437b-90fc-18a7414071e4', '5.1.8.1)', 'Sea side member for 1000mm dia of SPP', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('16a9029c-98a2-4a4a-b049-313655777ce5', '5.4.6)', 'Supply and install bollard (150kN) for Service Boat Berth including all relevant accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('1838f0a1-2bae-4afe-bd18-d93c02f84aef', '5.2.5.3)', 'Sub grade preparation CBR>6%', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('1e53c0c0-1461-4809-81b4-091047386420', '5.1.6', 'Handle, pitch and drive Steel Pipe Pile', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('210ad604-41f7-4b57-ad24-f02fa029fb43', '5.2.1.2)', 'Handle, pitch and driving of \"PCCSP\" (W=950, B=1,246mm) including cutting and other incidental works (Below MSL: 23.5m) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('22c367b4-974d-4637-a771-9af3ef3c9374', '5.1.5.2)', 'Central 1000mm dia of SPP, L=45.0m (Below MSL: 43.6m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('27a98583-a89e-479e-bcc7-0694e10f4b9a', '5.1.8.2)', 'Central member for 1000mm dia of SPP', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('2f637f4e-992f-489e-990f-635f27e8e1c9', '5.3.4.1)', 'Supply and filling of concrete \"Class B\" including formwork, support, rebars, etc. ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('2f781641-de38-4659-b2d5-f3ab750d65bc', '5.3.5', 'Concrete Revetment for Ramp', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('2f8d59cd-7602-4c1e-ad49-abdcb5e39f34', '5.1.1.2)', 'Central: 1000mm dia x t=24 x L27.5m (SKK490) + 1000mm dia x t=17 x L 17.5m (SKK400) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('30cf59ea-f90e-41f5-b3df-23410c55ae6c', '5.3.1.6)', 'Handle, pitch and driving of PC Joint Pile (400mm x 650mm) including cutting, chipping and other incidental works (Below MSL:20.5m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('30fcd4a6-f15d-443e-b190-91edc121aaa4', '5.1', 'Strut Berth -12.5m (Berth No.7)', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('32e08d48-8de3-48e5-a94b-dac503eac54d', '5.1.9.2)', 'Supply and install potential measuring terminal including steel, welding, etc. ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('35471411-94d8-4191-af68-f107e3aadc4f', '5.2.1', 'Piling works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('388df255-287e-4818-bfb8-f56ae96cec2d', '5.1.13.1)', 'Supply and deliver PC deck slab (Type C)', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('39488105-9f56-49e6-a597-dbfa6223a4fc', '5.1.2', 'Supply and deliver to site of Steel Pipe Sheet Pile (SKY 400) including toe reinforcement, joint steel (P-P and P-T), welding etc. ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('3b6030c8-7444-4954-bca5-bfa485ebff07', '5.3.5.1)', 'Supply and placement of In-situ concrete \"Class C\" including formwork, support, etc. for Retaining walls ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('3ca609a9-c54b-47c4-b1db-5fcede0d05c7', '5.2.3', 'Slab anchorage works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('3e68761a-3f4a-4321-b014-68b6fb939c7b', '5.1.5.3)', 'Land side 1000mm dia of SPP, L=44.0m (Below MSL: 42.6m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('4266f3f1-7a24-4b81-9f64-24291753041c', '5.2.4.3)', 'Supply, levelling and placement of armor rock 100-250 kg works according to drawings and specifications ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('44a960d8-4a06-419f-9812-af8cdf61c81e', '5.3', 'RORO Berth', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('44bbd79f-6ed9-464b-a86d-6cba61c3884b', '5.1.15', 'Miscellaneous works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('47d54ca3-054f-4955-ad35-9635fc97a9bc', '5.4.3)', 'Supply and install double cell type fender (800H) for Ro-Ro Berth including all relevant accessories ', 'set', NULL, '1', NULL, '1', NULL, NULL, NULL), ('486ac11c-d5fb-404b-877d-97f72a6bed3e', '5.2.3.3)', 'Supply, transportation, leveling, filling of rubble foundation (t=200mm)', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('48b0b02d-68d9-4e9e-977c-5bdc492051a2', '5.1.9.1)', 'Supply and install aluminum alloy anode (3.5A x 50Y) including steel, epoxy putty, welding, etc. ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('49bcb2c3-4a1a-42c9-a903-b9e5bdef3062', '5.1.5', 'Handle, pitch and drive Steel Pipe Pile', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('4bd5b6e3-e060-41b2-84ad-e8f59102ff08', '5.3.3.1)', 'Excavation of CPM soil', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('4dafb704-1867-45b0-bd58-b20972943d9c', '5.3.1.3)', 'Supply and delivery to site PC Joint Pile (400mm x 650mm), L=22m) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('4e1732ad-7221-4d54-b8e0-89ab9b783811', '5.2.5.4)', 'Concrete curbing (class B / h=850mm) including leveling concrete (class D / t=100mm) with rubble mound ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('52fd7981-0867-494b-a107-087a93890315', '5.2.6.3)', 'Supply and install fences including foundations and accessories', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('59369bb4-85f2-4a24-ba0a-7e6229786663', '5.3.4', 'Foundation of 1000kN mooring post (Type A & B)', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('5a0c3c7a-62c8-4ea4-8a83-f5b8641177bf', '5.4', 'Fender and bollard', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('5bd43d72-b7b0-4f63-b95c-5f790c03cf59', '5.2.2.1)', 'Supply and install Tie wire F100T (7 x ?11.1 ), L=21 m and other accessories including sleeves, nuts, plates, washers, trumpet sheaths etc.', 'set', NULL, '1', NULL, '1', NULL, NULL, NULL), ('5cb93d33-5d44-4f22-b896-57098c7ae6b7', '5.4.1)', 'Supply and install cell type fender (1000H) for Car Berth including all relevant accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('63304e4e-49bc-410b-8e15-012eab657c5b', '5.4.5)', 'Supply and install bollard (1000kN) for Car Berth including all relevant accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('64ec4427-ac07-4e37-b6d6-a33e9301681b', '5.1.6.2)', '800mm dia x t=11 x L25.0m (Below MSL:23.6m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('69c77d44-f465-46b9-9fea-9e8a5f6ab61e', '5.1.9.3)', 'Supply and applying of protective coating (composite wrapping 6 layers)', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('6bf7ee38-d116-43bd-9a8e-ccb953b0f7da', '5.3.1', 'Piling works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('6edfdfea-dfe4-46ae-a48c-270d24ac53f7', '5.2.3.1)', 'Excavation of CPM soil above ±0.00m', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('75f27b9b-dab9-463d-b8d2-66351b9b185f', '5.1.4.2)', 'Central member for 1000mm dia of SPP', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('76316414-6860-4c5d-825e-4070cfcf9af9', '5.2.5.2)', 'Aggregate sub base course t=550mm', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('7665c462-a9da-4c4b-ba91-1f88e0283fd0', '5.3.7.1)', 'Concrete pavement (t=300mm) including wire mesh, joints, tie-bars, dowel bars, rebars, joint sealers/fillers ', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('7875cadb-aa5e-4d39-809f-b27d1fd18352', '5.1.1', 'Piling works Supply and deliver to site of Steel Pipe Pile incl. toe reinforcement, shear key, hanging metal, welding, etc. ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('7a5ac8c3-37c7-4453-921e-aaba3a754089', '5.3.4.2)', 'Supply, transportation, leveling, filling of rubble foundation (t=200mm)', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('7ece1615-8e47-4687-823e-07f266ae55ac', '5.4.8)', 'Supply and install mooring bit (1000kN) for Ro-Ro Ramp including all relevant accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('800f53af-ce9d-4b07-abba-76122bff9319', '5.1.7', 'Handle, pitch and driving of PC Joint Pile (600x616) including cutting, chipping and other incidental works  (Below MSL:23.6m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('858bfccc-ec79-461b-87bd-8e3d48ceeb56', '5.3.2.1)', 'Supply and install Tie wire F100T (7 x ?11.1 ), L=21.2m and other accessories including sleeves, nuts, plates, washers, trumpet sheaths etc. for RO-RO berth ', 'set', NULL, '1', NULL, '1', NULL, NULL, NULL), ('87acbb6e-4d48-4e3e-acc7-6f18d9e76bbc', '5.3.6', 'Scour Protection', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('8c18ead9-9419-4990-8d85-59265b08550a', '5.1.15.1)', 'Supply and install curbings including accessories', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('8f9005aa-eb0d-4bf3-9c6e-0405c9ff789e', '5.2.6.1)', 'Supply and install curbings including necessary accessories', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('90e2d9ea-4740-4f10-84e0-f1225a2d6ffa', '5.1.6.1)', '1000mm dia x t=11 x L25.0m (Below MSL:23.6m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('928dfcd1-3ac5-4db3-aaa0-2266b108a242', '5.3.8.2)', 'Supply and install rubber ladder including necessary accessories', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('92a9f09a-8368-41a8-b61e-b36b852c7e4b', '5.3.1.1)', 'Supply and delivery to site PC Corrugated Sheet Pile \"PCCSP\" (W=700mm, B=1,246mm, L=22m) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('92f84403-6ece-451b-8c97-43cdf28507c0', '5.3.6.2)', 'Supply, levelling and placement of armor stone 200-500 kg works according to drawings and specifications ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('931b69ac-0252-4579-b4b4-fa2a8f2cbc1a', '5.2.2.2)', 'Supply and filling of concrete \"Type E\" including formwork, support, rebars and expansion joint (elastite), leveling concrete etc. ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('934223b3-170a-4a8f-9695-e42723bc7bcc', '5.1.15.3)', 'PDA Test including measurement of Setup Ratio', 'piles', NULL, '1', NULL, '1', NULL, NULL, NULL), ('9482bb5a-4bf7-45d9-b66c-9f6174785b1d', '5.2', 'Service Boat Berth (Berth No.8)', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('94e7ab4d-89f4-4c03-8b1f-75691eab0bc1', '5.3.1.2)', 'Supply and delivery to site PC Joint Pile (500mm x 700mm), L=22m) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('960e8f64-f799-43b2-8fa2-cb0b9c83b97e', '5.1.1.3)', 'Land side: 1000mm dia x t=24 x L27.5m (SKK400) + 1000mm dia x t=17 x L16.5m (SKK400) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('968524f6-e5e1-4f3d-9d11-f5472cf2a357', '5.1.1.1)', 'Sea side: 1000mm dia x t=24 x L28.5m (SKK490) + 1000mm dia x t=17 x L 16.5m (SKK400) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('9702c5bf-d7cc-48cf-b6ff-ebf09269e138', '5.3.1.5)', 'Handle, pitch and driving of PC Joint Pile (500mm x 700mm) including cutting, chipping and other incidental works (Below MSL:20.5m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('9a0fed05-e019-4ebd-9063-8fe689add95c', '5.3.3', 'Slab anchorage works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('9aa1280e-19da-413b-b236-f0db5ac702bd', '5.2.4', 'Scour Protection', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('a1d7dfdb-b682-44d6-87e9-7b63830e10b1', '5.3.2.3)', 'Supply and install Tie wire F100T (7 x ?11.1 ), L=30.25m and other accessories including sleeves, nuts, plates, washers, trumpet sheaths etc. for RAMP E-W ', 'set', NULL, '1', NULL, '1', NULL, NULL, NULL), ('a64c0677-a05c-4053-afe3-4841b633e5d0', '5.2.5', 'Apron pavement', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('a6bf82fd-c49c-4b07-9d50-14f2121997a4', '5.1.13', 'PC deck slab', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('a7ca2e1c-60ec-4e3e-81e8-efd800655d8d', '5.3.1.4)', 'Handle, pitch and driving of \"PCCSP\" (W=700, B=1,246mm) including cutting and any other incidental works (Below MSL:20.5m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('aceb7b91-7c92-4e72-aa88-3a60e77ea69a', '5.2.6', 'Miscellaneous works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('b21d7b33-48d4-4325-ba1d-3b73a4606774', '5.2.4.2)', 'Supply, levelling and placement of stones 5-20 kg works according to drawings and specifications ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('b3d65c6e-3646-4e52-9292-7b8da964c3aa', '5.1.3', 'Supply and delivery to site PC Joint Pile (600mm x 616mm), L=25m) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('b437fe22-0e46-4e8e-b7ab-71939fe85a26', '5.2.3.2)', 'Supply and placement of Slab Anchorage as dimension shown on drawings including rebars, formwork, support, lifting hook, etc. ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('b75568a1-adb0-43c8-a8cf-bc159e333979', '5.1.13.3)', 'Install including tensioning, PC strand, bearings, concrete, formwork, re-bars, etc. of PC deck slab (Type C) ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('bac6ea13-aa7c-4162-a3ef-9c6cba069351', '5.1.12', 'Deck Slab (Coping Concrete for SPSP) Supply and placing of Class E concrete including reinforcement, support, in-pile concrete, welding, scaffolding, expansion joint, formwork, reinforcement ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('bdbf6759-5026-4704-b9b1-58cf4fc5b027', '5.1.10', 'Deck Slab (Pier Head) Supply and placing of Class E concrete including support, welding, scaffolding, in-pile concrete, rubber bearing pads, anchor caps/bars etc., water hydrant pipe, formwork, reinforcement ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('bfbcbbc4-ff2b-4f77-afaa-f79a216723bf', '5.1.4.1)', 'Sea side member for 1000mm dia of SPP', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('c0f2b99b-8dbc-4f27-88c9-659931ba867b', '5.1.2.2)', '800mm dia x t=11 x L25.0m (SKY400)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('c9268dd7-fe66-4ce0-b83a-21e9c99ef7b0', '5.2.5.1)', 'Concrete pavement (t=300mm) including wire mesh, joints, tie-bars, dowel bars, rebars, joint sealers/fillers ', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('c957b8ff-2a96-4c58-b850-f31415b4d6b4', '5.2.1.1)', 'Supply and delivery to site PC Corrugated Sheet Pile \"PCCSP\" (W=950mm, B=1,246mm, L=25m) ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('cb71de08-da72-451e-afed-70997f0e8418', '5.3.8', 'Miscellaneous works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('cbac6b04-7c86-4164-b0bd-6a95d0c99fed', '5.3.6.1)', 'Supply, deliver, install and complete the Bamboo Mat works (3 layers) including testing and other incidental works ', 'sq.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('d293e1ff-0dd1-44c3-9804-c315b50229a2', '5.3.7.4)', 'Concrete curbing (class B / h=850mm) including leveling concrete (class D / t=100mm) with rubble mound ', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('d3e00cdc-6bb7-4f24-ab31-b8c40fd7d23d', '5.2.4.1)', 'Supply, deliver, install and complete the Bamboo Mat works (3 layers) including testing, bamboo for stone fence, other incidental works ', 'sq.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('d6d6f36f-7d58-4734-913d-4d0a0cbc261c', '5.1.2.1)', 'Central: 1000mm dia x t=11 x L25.0m (SKY400)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('d75c0474-4769-49a5-8d16-1d1c4f8875a8', '5.4.4)', 'Supply and install V-type fender (1000H, L=2.0m) for Ro-Ro Ramp including all relevant accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('dbe13f9b-8a51-4d5b-bd90-df365b074fc6', '5.3.8.4)', 'Supply and install gates (L=10m) including foundations and necessary accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('de8a971f-3385-4741-93b5-ecba052dfa5a', '5.1.4', 'Metal works Supply and deliver to site of submerged strut member including support materials, H-shape beam, grouting pipes.etc. ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('e12c3b08-9e74-4399-94b0-85c24349ddc9', '5.1.13.4)', 'Ditto (Type D)', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('e3ac34c1-70d0-4e0f-bd26-17e31d3ca0da', '5.1.8', 'Install of submerged strut member including mortar grouting, welding etc.', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('e4fc0c57-cb9a-4af9-a357-d2367376bcbc', '5.2.2', 'Coping concrete works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('e7707c71-8b40-46f6-8836-1d2a671ad132', '5.3.7', 'Apron pavement', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('e8e3aef8-7e89-42e9-b9bc-f3421f0fa47e', '5.3.7.2)', 'Aggregate sub base course t=550mm', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('eb134da8-25b0-48ce-aa8f-2be542406522', '5.3.2', 'Coping concrete works', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('f1d7d983-4811-4f5c-bb3e-bc2c03e784b8', '5.1.5.1)', 'Sea side 1000mm dia of SPP, L=45.0m (Below MSL: 43.6m)', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL), ('f38960c5-49bb-4503-b3d8-54ea24a8157a', '5.4.7)', 'Supply and install bollard (700kN) for Ro-Ro Berth including all relevant accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('f576da72-22be-4c44-82ad-ced31a084178', '5.1.15.2)', 'Supply and install rubber ladder including accessories', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('f6c3be02-0c4a-4738-b176-a2a4f2731e99', '5.3.7.3)', 'Sub grade preparation CBR>6%', 'm2', NULL, '1', NULL, '1', NULL, NULL, NULL), ('f8ad559c-efc3-4354-8a1f-74275e4acc73', '5.3.3.2)', 'Supply and placement of Slab Anchorage as dimension shown on drawings including rebars, formwork, support, lifting hook, tie-wire sheath', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('fbbb024f-1627-4c0f-8711-1c7e7ce3ffac', '5.1.9', 'Corrosion protection system ', '', NULL, '1', NULL, '1', NULL, NULL, NULL), ('fc472435-abe9-4fb1-a348-e4ea3a050ddb', '5.4.2)', 'Supply and install V-type fender (V400Hx2800L) for Service Boat Berth including all relevant accessories ', 'no.', NULL, '1', NULL, '1', NULL, NULL, NULL), ('fcee5c52-09f3-43e0-940b-de2761226c9b', '5.3.3.3)', 'Supply, transportation, leveling, filling of rubble foundation (t=200mm)', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('fee209ff-d4d5-409d-abe9-e8e711a0bef3', '5.3.2.4)', 'Supply and filling of concrete \"Type E\" including support, expansion joints, levelling concrete, formwork, reinforcement for RORO berth and Ramp ', 'cu.m', NULL, '1', NULL, '1', NULL, NULL, NULL), ('ff9d729c-883c-48eb-8222-e5935ba24869', '5.3.8.1)', 'Supply and install curbings including necessary accessories', 'm', NULL, '1', NULL, '1', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table patimone_incoming_letters
-- ----------------------------
DROP TRIGGER IF EXISTS `auto_insert_letter`;
delimiter ;;
CREATE TRIGGER `auto_insert_letter` AFTER INSERT ON `patimone_incoming_letters` FOR EACH ROW BEGIN INSERT INTO patimone_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1); 
        END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
