ALTER TABLE `APP_application`
  DROP FOREIGN KEY `fk_APP_DIR`;

ALTER TABLE `APP_application`
  DROP COLUMN `DIR_id`,
  DROP INDEX `fk_APP_DIR_idx` ;