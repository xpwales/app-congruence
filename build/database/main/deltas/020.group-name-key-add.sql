# Groups names keys must be unique to each directory
ALTER TABLE `GRP_group`
  ADD COLUMN `GRP_name_key` VARCHAR(32) NOT NULL AFTER `GRP_name`,
  ADD UNIQUE INDEX `GRP_name_key_DIR_UNIQUE` (`DIR_id` ASC, `GRP_name_key` ASC);