CREATE TABLE `ACC_account` (
  `ACC_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `BRND_id` INT UNSIGNED NOT NULL,
  `DIR_id` INT UNSIGNED NOT NULL,
  `ACC_id_hash` VARCHAR(32) NOT NULL,
  `ACC_enabled` TINYINT NOT NULL,
  `ACC_verified` TINYINT NOT NULL,
  `ACC_username` VARCHAR(32) NOT NULL COMMENT 'Username unique to Brand but not to table.',
  `ACC_email_address` VARCHAR(254) NOT NULL COMMENT 'Email address unique to Brand but not to table.',
  `ACC_firstname` VARCHAR(32) NOT NULL,
  `ACC_middlename` VARCHAR(32) NULL,
  `ACC_lastname` VARCHAR(32) NOT NULL,
  `ACC_password_hash` VARCHAR(64) NOT NULL,
  `ACC_password_salt` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`ACC_id`),
  UNIQUE INDEX `ACC_id_hash_UNIQUE` (`ACC_id_hash` ASC),
  UNIQUE INDEX `ACC_password_salt_UNIQUE` (`ACC_password_salt` ASC),
  INDEX `fk_ACC_BRND_idx` (`BRND_id` ASC),
  INDEX `fk_ACC_DIR_idx` (`DIR_id` ASC),
  UNIQUE INDEX `ACC_username_BRND` (`BRND_id` ASC, `ACC_username` ASC),
  UNIQUE INDEX `ACC_email_address_BRND` (`BRND_id` ASC, `ACC_email_address` ASC),
  CONSTRAINT `fk_ACC_BRND`
  FOREIGN KEY (`BRND_id`)
  REFERENCES `BRND_brand` (`BRND_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_ACC_DIR`
  FOREIGN KEY (`DIR_id`)
  REFERENCES `DIR_directory` (`DIR_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
  DEFAULT CHARACTER SET 'utf8' COLLATE utf8_general_ci
  ENGINE = INNODB;
