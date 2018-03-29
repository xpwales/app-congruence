<?php


use Phinx\Migration\AbstractMigration;

class MyApplication extends AbstractMigration
{
	public function up()
	{
		parent::up(); // TODO: Change the autogenerated stub

		$this->execute(
			"CREATE TABLE `APP_application` (
					`APP_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
					`DIR_id` INT UNSIGNED NOT NULL,
					`APP_id_hash` VARCHAR(32) NOT NULL,
					`APP_enabled` TINYINT NOT NULL,
					`APP_name` VARCHAR(32) NOT NULL,
					`APP_description` VARCHAR(255) NULL,
					PRIMARY KEY (`APP_id`),
					UNIQUE INDEX `APP_id_hash_UNIQUE` (`APP_id_hash` ASC),
					INDEX `fk_APP_DIR_idx` (`DIR_id` ASC),
					CONSTRAINT `fk_APP_DIR`
					FOREIGN KEY (`DIR_id`)
					REFERENCES `DIR_directory` (`DIR_id`)
					ON DELETE RESTRICT
					ON UPDATE RESTRICT)
					DEFAULT CHARACTER SET 'utf8' COLLATE utf8_general_ci
					ENGINE = INNODB;"
		);
	}
}
