ALTER TABLE `ACC_account`
  CHANGE COLUMN `ACC_username` `ACC_username` VARCHAR(32) NOT NULL COMMENT 'Username unique to directory but not to table.' ,
  CHANGE COLUMN `ACC_email_address` `ACC_email_address` VARCHAR(254) NOT NULL COMMENT 'Email address unique to directory but not to table.' ;