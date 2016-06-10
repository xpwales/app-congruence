ALTER TABLE `ACC_account`
  ADD COLUMN `ACC_created_timestamp` INT UNSIGNED NOT NULL AFTER `ACC_password_salt`,
  ADD COLUMN `ACC_modified_timestamp` INT UNSIGNED NOT NULL AFTER `ACC_created_timestamp`;

ALTER TABLE `APP_application`
  ADD COLUMN `APP_created_timestamp` INT UNSIGNED NOT NULL AFTER `APP_description`,
  ADD COLUMN `APP_modified_timestamp` INT UNSIGNED NOT NULL AFTER `APP_created_timestamp`;

ALTER TABLE `BRND_brand`
  ADD COLUMN `BRND_created_timestamp` INT UNSIGNED NOT NULL AFTER `BRND_enabled`,
  ADD COLUMN `BRND_modified_timestamp` INT UNSIGNED NOT NULL AFTER `BRND_created_timestamp`;

ALTER TABLE `DIR_directory`
  ADD COLUMN `DIR_created_timestamp` INT UNSIGNED NOT NULL AFTER `DIR_description`,
  ADD COLUMN `DIR_modified_timestamp` INT UNSIGNED NOT NULL AFTER `DIR_created_timestamp`;

ALTER TABLE `GRP_group`
  ADD COLUMN `GRP_created_timestamp` INT UNSIGNED NOT NULL AFTER `GRP_description`,
  ADD COLUMN `GRP_modified_timestamp` INT UNSIGNED NOT NULL AFTER `GRP_created_timestamp`;

ALTER TABLE `TEN_tenant`
  ADD COLUMN `TEN_created_timestamp` INT UNSIGNED NOT NULL AFTER `TEN_sys_admin_notes`,
  ADD COLUMN `TEN_modified_timestamp` INT UNSIGNED NOT NULL AFTER `TEN_created_timestamp`;
