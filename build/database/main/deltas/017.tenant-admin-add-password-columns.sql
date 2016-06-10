ALTER TABLE `TENADM_tenant_admin`
  ADD COLUMN `TENADM_password_hash` VARCHAR(64) NOT NULL AFTER `TENADM_modified_timestamp`,
  ADD COLUMN `TENADM_password_salt` VARCHAR(32) NOT NULL AFTER `TENADM_password_hash`;
