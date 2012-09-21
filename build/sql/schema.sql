
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- SEC_SQLAudit
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SEC_SQLAudit`;

CREATE TABLE `SEC_SQLAudit`
(
    `sqlaudit_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strSQLStatement` TEXT,
    `strParameters` TEXT,
    `strPageURL` TEXT,
    `intRecordID` BIGINT,
    `intVersionID` BIGINT,
    `dtStartDate` DATETIME,
    `dtEndDate` DATETIME,
    `intCreatedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    PRIMARY KEY (`sqlaudit_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SEC_WebpageTracking
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SEC_WebpageTracking`;

CREATE TABLE `SEC_WebpageTracking`
(
    `webpagetracking_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strURL` TEXT,
    `strRequestMethod` VARCHAR(255),
    `strQueryString` TEXT,
    `strPostData` TEXT,
    `strHttpUserAgent` TEXT,
    `strRemoteAddr` TEXT,
    `strHttpReferer` TEXT,
    `strSessionID` TEXT,
    `intCreatedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    PRIMARY KEY (`webpagetracking_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_Declaration
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_Declaration`;

CREATE TABLE `SYS_Declaration`
(
    `declaration_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strCode` VARCHAR(255),
    `strHtml` TEXT,
    `strType` VARCHAR(255),
    `blnActive` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`declaration_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_FrmElement
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_FrmElement`;

CREATE TABLE `SYS_FrmElement`
(
    `frmelement_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strName` VARCHAR(255),
    `strClassName` VARCHAR(255),
    `strExtends` VARCHAR(255),
    `strIncludes` TEXT,
    `strVariables` TEXT,
    `strConstructor` TEXT,
    `strConstructorArgs` TEXT,
    `strGetHTML` TEXT,
    `strGetHTMLRow` TEXT,
    `strGetValue` TEXT,
    `strSetValue` TEXT,
    `strGetScripts` TEXT,
    `strOtherCode` TEXT,
    `strParameters` TEXT,
    `strParamArray` TEXT,
    `DBVersionID` BIGINT,
    `blnActive` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`frmelement_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_FrmValidation
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_FrmValidation`;

CREATE TABLE `SYS_FrmValidation`
(
    `frmvalidation_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strName` VARCHAR(255),
    `strClassName` VARCHAR(255),
    `strVariables` TEXT,
    `strJSCode` TEXT,
    `strIsValidCode` TEXT,
    `strOtherCode` TEXT,
    `DBVersionID` BIGINT,
    `blnActive` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`frmvalidation_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_SQLQuery
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_SQLQuery`;

CREATE TABLE `SYS_SQLQuery`
(
    `sqlquery_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strStatement` TEXT,
    `strName` TEXT,
    `strDescription` TEXT,
    `strPrimaryField` VARCHAR(255),
    `DBVersionID` BIGINT,
    `blnActive` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`sqlquery_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_URLRouter
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_URLRouter`;

CREATE TABLE `SYS_URLRouter`
(
    `urlrouter_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strName` VARCHAR(255),
    `strPattern` TEXT,
    `strConditions` TEXT,
    `strControllerClass` VARCHAR(255),
    `strCallable` TEXT,
    `blnGet` INTEGER,
    `blnPost` INTEGER,
    `intOrder` INTEGER,
    `blnActive` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`urlrouter_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_Webpage
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_Webpage`;

CREATE TABLE `SYS_Webpage`
(
    `webpage_id` BIGINT NOT NULL AUTO_INCREMENT,
    `webtemplate_id` BIGINT,
    `strLocation` VARCHAR(255),
    `strName` VARCHAR(255),
    `strDescription` TEXT,
    `strAction` VARCHAR(255),
    `strRequiredParameters` VARCHAR(255),
    `strWebpageFactory` VARCHAR(255),
    `strHtml` TEXT,
    `strCommonJS` TEXT,
    `ClonefishparentID` BIGINT,
    `strClonefishConfig` TEXT,
    `strORMClass` VARCHAR(255),
    `strSuccRedirect` VARCHAR(255),
    `sqlquery_id` BIGINT,
    `strGridOptions` TEXT,
    `strEditBaseLinkUrl` VARCHAR(255),
    `strEditCustomFuncName` VARCHAR(255),
    `strEditCustomFunction` TEXT,
    `strMultiSelectCustomFunction` TEXT,
    `blnActive` INTEGER,
    `DBVersionID` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`webpage_id`),
    INDEX `webtemplate_id` (`webtemplate_id`),
    INDEX `sqlquery_id` (`sqlquery_id`),
    CONSTRAINT `sys_webpage_ibfk_1`
        FOREIGN KEY (`webtemplate_id`)
        REFERENCES `SYS_Webtemplate` (`webtemplate_id`),
    CONSTRAINT `sys_webpage_ibfk_2`
        FOREIGN KEY (`sqlquery_id`)
        REFERENCES `SYS_SQLQuery` (`sqlquery_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_WebpageColumn
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_WebpageColumn`;

CREATE TABLE `SYS_WebpageColumn`
(
    `webpagecolumn_id` BIGINT NOT NULL AUTO_INCREMENT,
    `webpage_id` BIGINT,
    `intQueryOrder` INTEGER,
    `strQueryColumn` VARCHAR(255),
    `strName` VARCHAR(255),
    `intOrder` INTEGER,
    `blnDisplay` INTEGER,
    `blnHidden` INTEGER,
    `blnHide` INTEGER,
    `blnSearch` INTEGER,
    `blnPrimaryKey` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`webpagecolumn_id`),
    INDEX `webpage_id` (`webpage_id`),
    CONSTRAINT `sys_webpagecolumn_ibfk_1`
        FOREIGN KEY (`webpage_id`)
        REFERENCES `SYS_Webpage` (`webpage_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- SYS_Webtemplate
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `SYS_Webtemplate`;

CREATE TABLE `SYS_Webtemplate`
(
    `webtemplate_id` BIGINT NOT NULL AUTO_INCREMENT,
    `strName` VARCHAR(255),
    `strDescription` VARCHAR(255),
    `strDocType` TEXT,
    `strHead` TEXT,
    `strHeader` TEXT,
    `strFooter` TEXT,
    `blnActive` INTEGER,
    `intCreatedBy` BIGINT,
    `intModifiedBy` BIGINT,
    `dtCreatedDate` DATETIME,
    `dtModifiedDate` DATETIME,
    PRIMARY KEY (`webtemplate_id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
