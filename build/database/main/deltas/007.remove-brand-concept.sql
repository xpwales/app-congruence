ALTER TABLE `ACC_account`
  DROP FOREIGN KEY `fk_ACC_BRND`;

ALTER TABLE `ACC_account`
  DROP COLUMN `BRND_id`,
  DROP INDEX `ACC_email_address_BRND` ,
  ADD UNIQUE INDEX `ACC_email_address_DIR` (`ACC_email_address` ASC, `DIR_id` ASC),
  ADD UNIQUE INDEX `ACC_username_DIR` (`ACC_username` ASC, `DIR_id` ASC),
  DROP INDEX `fk_ACC_BRND_idx` ,
  DROP INDEX `ACC_username_BRND` ;

DROP TABLE `BRND_brand`;