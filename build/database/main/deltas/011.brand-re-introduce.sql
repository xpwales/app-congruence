CREATE TABLE `BRND_brand` (
  `BRND_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `TEN_id` INT UNSIGNED NOT NULL,
  `BRND_id_hash` VARCHAR(32) NOT NULL,
  `BRND_name` VARCHAR(32) NOT NULL,
  `BRND_name_key` VARCHAR(32) NOT NULL COMMENT 'Name key unique to Tenant but not to table.',
  `BRND_description` VARCHAR(255) NULL
  COMMENT 'Brand name is unique to each tenant.',
  PRIMARY KEY (`BRND_id`),
  UNIQUE INDEX `BRND_id_hash_UNIQUE` (`BRND_id_hash` ASC),
  UNIQUE INDEX `BRND_name_key_TEN_id_UNIQUE` (`TEN_id` ASC, `BRND_name_key` ASC),
  CONSTRAINT `fk_BRND_TEN`
  FOREIGN KEY (`TEN_id`)
  REFERENCES `TEN_tenant` (`TEN_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
  DEFAULT CHARACTER SET 'utf8' COLLATE utf8_general_ci
  ENGINE = INNODB;