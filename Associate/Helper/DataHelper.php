<?php

namespace Certification\Associate\Helper;

use Magento\Framework\App\Helper\AbstractHelper;


class DataHelper extends AbstractHelper
{
       
        public function getQuestionData ()
        {



		$questionBank = array(
				array(
					"question_text" => "What is the relationship between products and categories in Magento?",
					"question_answers" => "Products may be assigned to zero or more categories;Product to category relation is dynamically defined by Catalog Product Rules;Each product belongs to zero or one category; Each product always belongs to one category",
					'question_correct_answer' => "Products may be assigned to zero or more categories",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "Magento allows you to specify custom values per store for product attributes created in the admin panel.<br>Which architectural pattern makes it possible?",
					"question_answers" => "Store Manager; Extension Attribute; Entity Attribute Value; Dependency Injection",
					'question_correct_answer' => "Extension Attribute",
					'question_image_links'    => ""
				),	
				array(
					"question_text" => "You are working on a Magento store which will be selling in two countries. Each country has its own set of payment methods.<br>How do you organize the project to support this requirement?",
					"question_answers" => "Create one website, two payment scopes; Create one website, one store view; Create one website, two store views;Create two websites, two store views",
					'question_correct_answer' => "Create one website, two store views",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "There are two different configurable products which both share one variation. The shared variation is represented by the same simple product.A customer added both configurables to the cart with the same selected variation?<br>How will they be displayed?",
					"question_answers" => "As two separate line items with quantity 1 each;As one line item which lists both configurable products with quantity 1 each;As one line item of the first product with quantity 2;As one line item of the second product with quantity 2",
					'question_correct_answer' => "As one line item which lists both configurable products with quantity 1 each",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are adding an entry to the backend menu. To do so you open a core etc/adminhtml/menu.xml file as a reference. In the file you see the node: :image: What is the result of specifying resource='Magento_Catalog::catalog'?",
					"question_answers" => "The menu item will only be visible to users who are assigned to a role with access to the matching ACL resource;The menu item will only be visible if the class method specified by the resource returns a true value;The last selected menu item for a user is stored in the DB so the previously visited page can be restored on the next login;The resource is used to locate the correct translation for the attributes listed in title='…'",
					'question_correct_answer' => "The menu item will only be visible to users who are assigned to a role with access to the matching ACL resource",
					'question_image_links'    => "0001.jpg"
				),
				array(
					"question_text" => "What are two functions of a resource model? (Choose two.)",
					"question_answers" => "It executes create, retrieve, update and delete actions for an entity;It loads lists of entity models;It is made available in the Magento API for the purpose of data manipulation;It maps an entity to one or more database rows",
					'question_correct_answer' => "It maps an entity to one or more database rows;It loads lists of entity models",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "How do you add a new link into the My Account sidebar?",
					"question_answers" => "By creating a new UI component;By creating a child of the My Account UI component;By adding the new section into the customer_account table in the database; By using a layout update",
					'question_correct_answer' => "By using a layout update",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "The constructor function for MagentoCatalogModelCategory contains this excerpt: :image:With the automatic dependency injection that Magento provides, how is the StoreManagerInterface resolved?",
					"question_answers" => "If no $/storeManager is provided, Magento’s code generator creates a shell concrete class based on MagentoStoreModelStoreManagerInterface; Magento finds all classes that implement MagentoStoreModelStoreManagerInterface (ordered alphabetically) and injects the first class.;Magento looks to the di.xml files in the entire system for a preference node for MagentoStoreModelStoreManagerInterface. This class is constructed and injected; Magento throws an exception because you cannot instantiate an interface",
					'question_correct_answer' => "If no $/storeManager is provided, Magento’s code generator creates a shell concrete class based on MagentoStoreModelStoreManagerInterface",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "A merchant requires the ability to configure contact information for their brick and mortar stores as a CSV file upload. The module already exists and contains an etc/adminhtml/system.xml file where the new field can be added.<br>How do you specify the class that will process the uploaded file?",
					"question_answers" => "<upload_model>MagentoConfigModelConfigUploadFile</upload_model>;<frontend_model>MagentoConfigModelConfigFrontendFile</frontend_model>;<backend_model>MagentoConfigModelConfigBackendFile</backend_model>;<source_model>MagentoConfigModelConfigSourceFile</source_model>",
					'question_correct_answer' => "<backend_model>MagentoConfigModelConfigBackendFile</backend_model>",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "Assume that a customer’s cart only includes one downloadable product.<br>What effect will it cause on the quote object?",
					"question_answers" => "The quote object will have a downloadable URL instead of an address;The quote object will not have shipping address;The quote object will not have any address;The quote object will not have a billing address",
					'question_correct_answer' => "The quote object will not have shipping address",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "A module declares the route::image:<br>What is the layout handle of the storefront path /custom/feature/?",
					"question_answers" => "mymodule_feature;custom_feature;mymodule_feature_index;custom_feature_index",
					'question_correct_answer' => "mymodule_feature_index",
					'question_image_links'    => "0003.jpg"
				),
				array(
					"question_text" => "You are adding a new entry to the backend menu that appears after<br>Marketing > SEO & Search > Site Map<br>You see the existing site map menu item is declared by the node::image:What two actions do you take to configure the new menu entry location? (Choose two.)",
					"question_answers" => "Specify item XML in the file etc/adminhtml/menu/marketing/seo/menu.xml; Specify parent='Magento_Sitemap::catalog_sitemap';Specify parent='Magento_Backend::marketing_seo'; Specify sortOrder='100'",
					'question_correct_answer' => "Specify parent='Magento_Backend::marketing_seo';Specify item XML in the file etc/adminhtml/menu/marketing/seo/menu.xml",
					'question_image_links'    => "0004.jpg"
				),
				array(
					"question_text" => "A merchant asks you to extend customer functionality to allow customer accounts to be associated with two or more billing addresses.<br>How is this implemented?",
					"question_answers" => "By adding the attribute like customer_address_billing2 and customizing both My Account and Checkout functionality to use that new attribute; By changing the System Configuration setting: Customer>Allow multiple billing addresses to Yes;By altering the customer_entity table, adding the field billing_address2, and customizing both My Account and Checkout functionality to use that new field; This is out-of-the box functionality",
					'question_correct_answer' => "By adding the attribute like customer_address_billing2 and customizing both My Account and Checkout functionality to use that new attribute",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are reviewing a theme in app/design/frontend/MyCompany/MyTheme and see the file etc/view.xml.<br>What is the function of this file?",
					"question_answers" => "It configures Grunt to compile assets for the theme;It stores theme and image configuration values;It specifies the applicable CSS files for the theme;It informs Magento that the theme is present and available for use",
					'question_correct_answer' => "It stores theme and image configuration values",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are building a report using complex SQL aggregations to locate the required data.<br>In what type of class do you put these SQL statements?",
					"question_answers" => "Resource model; Repository; Model; Helper",
					'question_correct_answer' => "Model",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "A merchant gives you the module MyCompany_MyModule to install.<br>How do you identify which REST endpoints are supported by the module?",
					"question_answers" => "REST endpoints are declared in etc/webapi_rest/di.xml;Every public method of every interface in the Api folder automatically is exposed as a REST endpoint;REST endpoints are declared in etc/rest.xml;REST endpoints are declared in etc/webapi.xml",
					'question_correct_answer' => "REST endpoints are declared in etc/webapi.xml",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are tasked with ensuring customers who log into the site are authorized. By default, this consists of ensuring the customers email and password match the values in the database. On this project, you need to verify additional data in this process.<br>Keeping in mind upgradeability, how is this done?",
					"question_answers" => "Create a before plugin for MagentoCustomerApiAccountManagementInterface’s authenticate method;Create a mutation of a CustomerInterface object to intercept the username and password; Create an event observer for the user_save_after observer; Override MagentoCustomerControllerAccountController.php",
					'question_correct_answer' => "Create an event observer for the user_save_after observer",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "What is the difference between online and offline shipping methods?",
					"question_answers" => "Online means that a shipment will have a tracking number, and offline means no tracking numbers are available;Online means Magento will use a shipping carrier’s API to obtain rates, offline means Magento will calculate the rates internally;Online means that an item’s shipping will be processed by the merchant, offline means that it will be processed by the customer;Online means that it will be sent to the customer using a shipping carrier, offline means the customer will pick up the order in person",
					'question_correct_answer' => "Online means that an item’s shipping will be processed by the merchant, offline means that it will be processed by the customer",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "A custom module needs to log all calls of MagentoCustomerApiAddressRepositoryInterface::save().<br>Which mechanism do you use?",
					"question_answers" => "An observer on the customer_address_repository_save event, which is automatically fired for every repository save; A proxy configured to intercept all calls to any public method and log them;An extension attribute configured in the extension_attributes.xml;A plugin declared for the save() method",
					'question_correct_answer' => "An observer on the customer_address_repository_save event, which is automatically fired for every repository save",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "What happens when a category’s is_anchor attribute is set to 1?",
					"question_answers" => "Products without a specified category will be associated with this category;The customer will see all products from all children of the category;This is the default category for a website;The category will always be visible in the menu",
					'question_correct_answer' => "The customer will see all products from all children of the category",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are writing a customization for the customer module. You need to make sure the configuration files from your module are loaded after the customer module’s configuration.<br>Where should the dependency be declared?",
					"question_answers" => "composer.json; etc/module.xml;etc/config.xml; etc/di.xml",
					'question_correct_answer' => "composer.json",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "A merchant sells shoes with multiple variations such as a color and size. A shoe is represented by a configurable product. There are seven different colors and four sizes.<br>What is the minimal amount of simple products that represent a combination of color and size needs to be created in order to make a shoe salable?",
					"question_answers" => "Each color and size must have at least one representation, so a minimum of seven products is needed;One simple product that represents a combination of color and size is enough;A product may be purchased even without any combination available. The color and size may be adjusted during order fulfillment;A simple product for every combination must be created",
					'question_correct_answer' => "One simple product that represents a combination of color and size is enough",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are debugging a problem resulting from a recently deployed around plugin. The plugin is intercepting the doSomething method. The aroundDoSomething plugin method is called successfully, but the original doSomething method is no longer being executed as expected.<br>What is causing this?",
					"question_answers" => "The sort order of the plugin is too high and supersedes the priority of the intercepted method;The plugin implementation returned something other than its callable argument;The plugin implementation is skipping the execution of its callable argument;The plugin implementation overlooked using the AbstractPlugin parent class",
					'question_correct_answer' => "The plugin implementation is skipping the execution of its callable argument",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "The module MyCompany_MyModule will add a new page in the admin interface to display a custom entity in a grid.<br>You created a controller for this grid MyCompanyMyModuleControllerAdminhtmlCustomEntityIndex<br>Which two actions are required to make the new page accessible at the https://your.store.base.url/admin/my_module/custom_entity URL? (Choose two.)",
					"question_answers" => "Register my_module route for the AdminRouter in MyCompany/MyModule/etc/adminhtml/di.xml;Create a new menu item in MyCompany/MyModule/etc/adminhtml/menu.xml;Specify the my_module/custom_entity URL using a @route annotation in the action controller execute() method;Register my_module route in MyCompany/MyModule/etc/adminhtml/routes.xml",
					'question_correct_answer' => "Specify the my_module/custom_entity URL using a @route annotation in the action controller execute() method;Register my_module route in MyCompany/MyModule/etc/adminhtml/routes.xml",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "How do you persist an entity to the database?",
					"question_answers" => "Calling the store() method on the entity’s model; Calling the update() method on the entity’s collection; Calling the persist() method on the entity’s repository; Calling the save() method on the entity’s repository",
					'question_correct_answer' => "Calling the save() method on the entity’s repository",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are implementing a custom module MyModule, which provides an implementation of PsrLogLoggerInterface called MyCompanyMyModuleLogger.<br>The LoggerInterface has the default preference declared in app/etc/di.xml.<br>Keeping upgradability in mind, how do you make MyCompanyMyModuleLogger the default implementation of the LoggerInterface globally?",
					"question_answers" => "Declare a new preference for the LoggerInterface in app/code/myCompany/MyModule/etc/frontend/di.xml;Declare a new preference for the LoggerInterface in MyCompany/MyModule/etc/di.xml;Overwrite the existing preference for the LoggerInterface in app/etc/di.xml; Declare a new preference for the LoggerInterface in app/code/MyCompany/MyModule/etc/global/di.xml",
					'question_correct_answer' => "Overwrite the existing preference for the LoggerInterface in app/etc/di.xml",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "In a custom module you are adding a new field to the store configuration. The field will set the value for the configuration path mycompany/mymodule/myoption.<br>How do you supply the default value for that configuration option?",
					"question_answers" => "In the config/default/mycompany/mymodule/myoption node in the etc/config.xml file; In the system/mycompany/group/mymodule/field/myoption node in the etc/system.xml file;In the menu/default/section/group/field node in the file etc/adminhtml/menu.xml; In the system/section/group/field/value node in the etc/adminhtml/system.xml file",
					'question_correct_answer' => "In the config/default/mycompany/mymodule/myoption node in the etc/config.xml file",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You have added a new attribute origin of the type varchar to the product entity.<br>Which two calls will filter a product collection with origin set to 'California'? (Choose two.)",
					"question_answers" => "$/collection->addFieldToFilter(‘origin’, 'California'); $/collection->addAttributeToSelect(‘origin’, 'California');$/collection->joinAttribute(‘origin’, ‘catalog_product/origin’, ‘origin’, ‘California');$/collection->addAttributeToFilter(‘origin’, 'California')",
					'question_correct_answer' => "$/collection->addAttributeToSelect(‘origin’, 'California');$/collection->addAttributeToFilter(‘origin’, 'California')",
					'question_image_links'    => ""
				), 
				array(
					"question_text" => "You are working on a custom web API endpoint and have configured it in etc/webapi.xml. This config is cached as part of the config_webservice cache type.<br>Keeping performance in mind, how do you refresh the cached version of this config using Magento CLI?",
					"question_answers" => "cache:clean config_webservice;cache:refresh config_webservice;cache:flush;cache:purge",
					'question_correct_answer' => "cache:clean config_webservice",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You want to remove a column introduced by a third-party extension via declarative schema.<br>How do you do that?",
					"question_answers" => "Create the etc/db_schema.xml file and specify disable='true' on the column;Modify the original etc/db_schema.xml file and remove the column from there; Create a SchemaPatch file and remove the column programmatically; Copy the etc/db_schema.xml file into your module and remove the column from your copy",
					'question_correct_answer' => "Copy the etc/db_schema.xml file into your module and remove the column from your copy",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are working on a new entity called vendor. You implemented the model, resource model and collection. You want to ensure that standard model events will be fired for your model, so an observer can be created for the events vendor_save_after, vendor_save_commit_after and others.<br>How do you do that?",
					"question_answers" => "Create an entry in etc/di.xml and add the argument eventPrefix with the value of vendor;Declare the $/_eventPrefix property in your vendor model and set it to vendor;You must implement all appropriate methods and fire the events manually;Ensure that the primary key in the corresponding table is named vendor_id",
					'question_correct_answer' => "Declare the $/_eventPrefix property in your vendor model and set it to vendor",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "Your module adds a new controller class which will return a JSON response.<br>What will be the return type of the execute method?",
					"question_answers" => "You should implement a new API endpoint instead of returning JSON from a controller;The string value of Zend_Json::encode();An instance of MagentoFrameworkControllerResultJson;No return needed, an object that can be converted to JSON must be set as the Response body",
					'question_correct_answer' => "An instance of MagentoFrameworkControllerResultJson",
					'question_image_links'    => ""
				),		
				array(
					"question_text" => "In layout files you can change al element’s order on a page. This can be done using one of the following:<move> instruction before and after element attributes?<br>How are two methods different?",
					"question_answers" => "They are the same, both provide access to the same functionality;Elements are renamed by default when using the move instruction;The move instruction allows altering an element’s parent node; Before and after attributes can only be used with referenceContainer and referenceBlock",
					'question_correct_answer' => "Before and after attributes can only be used with referenceContainer and referenceBlock",
					'question_image_links'    => ""
				),		
				array(
					"question_text" => "You added a new constructor argument to an existing action controller class.<br>When you reload the page you get a PHP error that the wrong argument is passed to the class.<br>How do you fix this?",
					"question_answers" => "Clean the page cache;Deploy static content;Clean the <magento_root>/generated/ folder; Clean the config cache",
					'question_correct_answer' => "Clean the page cache",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "The module MyCompany_MyModule provides custom admin interface pages.<br>Access to these pages should only be granted to specific users.<br>You add the required configuration to the module’s acl.xml file, but the setting does not seem to work as expected.<br>How do you visually check if Magento evaluates your ACL resource as expected?",
					"question_answers" => "Write a plugin for the class MagentoFrameworkAclLoaderInterface::populateAcl() and echo out the loaded roles;Inspect the output of the CLI command bin/magento admin:role:resources – all;In the browser, open the admin User Roles page. Choose a role and inspect the tree of available resources;Inspect the response of a GET request to the webapi endpoint http://example.com/rest/V1/acl/resources",
					'question_correct_answer' => "Inspect the response of a GET request to the webapi endpoint http://example.com/rest/V1/acl/resources",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "A Magento industry partner shipping provider has tasked you to build their integration module called MyCompany_ShippingProvider.<br>Where do you define the class that provides options for the select field that enables or disables the provider in the file etc/adminhtml/system.xml?",
					"question_answers" => "<option_model>MagentoConfigModelConfigOptionYesno</option_model>;<source_model>MagentoConfigModelConfigSourceYesno</source_model>;<frontend_model>MagentoConfigModelConfigFrontendYesno</frontend_model>;<backend_model>MagentoConfigModelConfigBackendYesno</backend_model>",
					'question_correct_answer' => "<source_model>MagentoConfigModelConfigSourceYesno</source_model>",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "Where do you change the frontName for the admin router?",
					"question_answers" => "app/etc/config.xml;app/etc/env.php;app/etc/local.xml;composer.json",
					'question_correct_answer' => "app/etc/env.php",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "Which two ways does Magento persist category relationships in the database? (Choose two.)",
					"question_answers" => "Using slash-separated values in the path field;in the table catalog_category_index;in the parent_id field; Using comma-separated values in the parent-ids field",
					'question_correct_answer' => "Using slash-separated values in the path field;in the parent_id field",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "Which three scopes can be used to set different System Configuration values in Magento? (Choose three.)",
					"question_answers" => "Language;Area;Store View; Store; Website",
					'question_correct_answer' => "Store View; Store; Website",
					'question_image_links'    => ""
				),		
				array(
					"question_text" => "Which entity in Magento supports scoped attributes?",
					"question_answers" => "Customer;CMS Page; Category; Customer Address",
					'question_correct_answer' => "Category",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "A custom module must make changes to the schema following each setup:upgrade run. This must be done after all other module’s schema updates have been applied.<br>How is this accomplished?",
					"question_answers" => "Write a plugin intercepting MagentoSetupModelInstaller::handleDBSchemaData;Create an UpgradeSchemaAfter class which implements InstallSchemaInterface;Update the module’s setup_priority in etc/modules.xml;Create a Recurring class which implements InstallSchemaInterface",
					'question_correct_answer' => "Create a Recurring class which implements InstallSchemaInterface",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "You are working on a project that contains a million SKUs. The merchant has requested the product view page to have a custom color schema and page layout depending on the product price range.<br>How do you implement this, keeping simplicity in mind?",
					"question_answers" => "Create a custom block which will dynamically choose the appropriate template;Specify custom layout update XML in the admin panel for every product;Write a Data Patch which will set the appropriate layout update XML for every product record; Enable the dynamic product page UI component and configure it to use a different layout per price range",
					'question_correct_answer' => "Enable the dynamic product page UI component and configure it to use a different layout per price range",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "How do you add a foreign key to an existing table created by another module?",
					"question_answers" => "Create etc/db_schema.xml file with the table node and constraint child node;Run the command bin/magento setup:db-schema:upgrade <table> <constraint declaration>; This can only be done with raw SQL in a Schema Patch file; Create the etc/db_constraints.xml file and specify foreign key there in the constraint node",
					'question_correct_answer' => "Run the command bin/magento setup:db-schema:upgrade <table> <constraint declaration>",
					'question_image_links'    => ""
				),		
				array(
					"question_text" => "You have been given the task of importing products from an external source. You decide to create a custom module to do this. The class handling the import creates a product for each record, sets the data on it and saves it to the database.<br>What do you inject into a constructor to represent each product you create?",
					"question_answers" => "MagentoCatalogModelProduct;MagentoCatalogApiDataProductInterfaceFactory;MagentoCatalogApiDataProductInterface; MagentoCatalogModelProductBuilder",
					'question_correct_answer' => "MagentoCatalogApiDataProductInterfaceFactory",
					'question_image_links'    => ""
				),
				array(
					"question_text" => "Which two tasks are supported by Magento CLI? (Choose two.)",
					"question_answers" => "Customer password reset; Clearing cache; Codebase deployment from developer machine to staging server; Administrator account creation",
					'question_correct_answer' => "Clearing cache;Codebase deployment from developer machine to staging server",
					'question_image_links'    => ""
				),
					array(
						"question_text" => "A merchant you are working with has requested that you install a module from a well-known module vendor.<br>Why would you recommend utilizing Composer to install this module?",
						"question_answers" => "Composer acts as a firewall increasing security to the website.;Composer will manage the module’s version keeping it up to date.;Composer will back up the module ensuring that data will not be lost.;Composer speeds up the autoloading process for modules that it manages.",
						'question_correct_answer' => "Composer will manage the module’s version keeping it up to date.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You have been given a .zip file containing the MyCompany_MyModule to be installed.<br>Where do you put the contents of the .zip file?",
						"question_answers" => "/vendor;/app/code;/app/modules;/app/code/components",
						'question_correct_answer' => "/app/code",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You need to create a interface as a blueprint for a model that is stored in the database. The file name is TemperaturePointInterface.php<br> Where do you place this file?",
						"question_answers" => "app/code/MyCompany/MyModule/Api;app/code/MyCompany/MyModule/Model;app/code/MyCompany/MyModule/Api/Data;app/code/MyCompany/MyModule/Blueprint",
						'question_correct_answer' => "app/code/MyCompany/MyModule/Api/Data",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You are adding a new store configuration value and need it to be visible in the Global scope and the Store View scope.<br>Which attributes do you add to make this work?",
						"question_answers" => "showInDefault='1';ShowInStoreView='1';ShowInStore='1';ShowInWebsite='1'",
						'question_correct_answer' => "showInDefault='1';ShowInStore='1'",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You are adding real-time stock details to Magento. While most of the updates are fairly independent of Magento, you do need to adjust the behavior of the $/stockRegistry in a QuoteItem<br>Keeping simplicity in mind, how do you change a class that is specified in a constructor?",
						"question_answers" => "Override the default StockRegistry class with MyStockRegistry.;Override QuoteItem and specify the type of $/stockRegistry to be MyStockRegistry.;In di.xml specify a type node and point the argument to the new MyStockRegistry class.;In di.xml create a virtualType; set the type to be the QuoteItem and the value to be the new MyStockRegistry class.",
						'question_correct_answer' => "In di.xml specify a type node and point the argument to the new MyStockRegistry class.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "What is a valid limitation for the usage of an after plugin?",
						"question_answers" => "After plugins do not work on event observers.;After plugins only applies to the class that is specified in the XML configuration.;After plugins can only be used on public methods.;After plugins are only run when called by the parent class.",
						'question_correct_answer' => "After plugins can only be used on public methods.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You are setting up an event observer for the sales_order_place_after event. The observer must only take an action after a website visitor places an order.<br> What steps do you take (choose 3)?",
						"question_answers" => "Create an event and observer node in events.xml that specifies the object instance.;Create an observer class that implements \Magento\Framework\Event\ObserverInterface;Run the bin/magento event:listen sales_order_place_after CLI command.;Ensure that etc/webapi_rest/events.xml exists.;Ensure that etc/frontend/events.xml exists.",
						'question_correct_answer' => "Create an event and observer node in events.xml that specifies the object instance.;Create an observer class that implements \Magento\Framework\Event\ObserverInterface;Ensure that etc/webapi_rest/events.xml exists.",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "The Magento CLI provides access to Magento that is not available elsewhere. Which actions can only be executed on the CLI?",
						"question_answers" => "Upgrading the database.;Clearing the cache;Creating an admin user.;Triggering a reindex.;Importing a list of products.",
						'question_correct_answer' => "Upgrading the database.",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "What are two ways to install a module in Magento:",
						"question_answers" => "Create a directory in vendor/ and copy the modules files into it.;Use the Web Setup Wizard.;Place the module’s files into app/code.;Add the module’s information into composer.lock.",
						'question_correct_answer' => "Use the Web Setup Wizard.;Place the module’s files into app/code.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are troubleshooting an error on a staging website. It is challenging to track down because no error information is being shown to the web browser.<br>How can you get better information on the error using native Magento functionality?",
						"question_answers" => "Run bin/magento deploy:mode:set developer to enable developer deploy mode.;Change Stores > Configuration > Developer > Logging = Enabled.;Add 'deploy-mode' => true into app/etc/config.php.;In app/etc/di.xml,change the <argument> node for DisplayErrorVerbosity to be true.",
						'question_correct_answer' => "Run bin/magento deploy:mode:set developer to enable developer deploy mode.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have created a controller in your module’s Controllers/Index/Test.php. You then placed this code into your module’s etc/frontend/routes.xml file:
											<router id='standard'>
												<route id='do' frontName='something'>
													<module name='MyCompany_MyModule' />
												</route>
											</router>
										What is the URL path to access this controller?",
						"question_answers" => "something/index/test/;something/test/;do/index/test/;mymodule/index/test/",
						'question_correct_answer' => "something/index/test/",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "What product attribute is responsible for generating a friendly URL path?",
						"question_answers" => "Name;URL Path;URL key;Slug",
						'question_correct_answer' => "URL key",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "What is the purpose of a theme’s etc/view.xml file?",
						"question_answers" => "This file initializes the theme in Magento.;This file associates a module (in app/code) with this theme.;This file provides configuration for aspects of how the theme will be rendered.;This file is not used for themes.",
						'question_correct_answer' => "This file provides configuration for aspects of how the theme will be rendered.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You need to change the template for the “breadcrumbs' block on a specific page to MyCompany_MyModule::breadcrumb-template.phtml.<br> How do you do this?",

						"question_answers" => "<referenceBlock name='breadcrumbs' template='MyCompany_MyModule::breadcrumb-template.phtml'/>
				;<referenceBlock name='breadcrumbs'>
				<action method='setTemplate'>
					<argument name='template' xsi:type='string'>MyCompany_MyModule::breadcrumb-template.phtml</argument>
				</arguments>
				</referenceBlock>
				;<referenceBlock name='breadcrumbs'>
				<arguments>
					<argument name='template' xsi:type='string'>MyCompany_MyModule::breadcrumb-template.phtml</argument>
				</arguments>
				</referenceBlock>
				;<referenceBlock name='breadcrumbs' updated_template='MyCompany_MyModule::breadcrumb-template.phtml'/>",
						'question_correct_answer' => "<referenceBlock name='breadcrumbs' template='MyCompany_MyModule::breadcrumb-template.phtml'/>",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "The block layout XML node does not require a class attribute to be specified.<br>In the absence of the class attribute<br> what class is used?",
						"question_answers" => "Magento\Framework\View\Element\Template;Magento\Framework\View\Element\AbstractBlock;Magento\Framework\View\Element\Text;Magento\Framework\View\Element\Empty",
						'question_correct_answer' => "Magento\Framework\View\Element\Template",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You have created a controller in app/code/MyCompany/MyModule/Controller/Index/Test.php. Additionally, you have specified the following etc/frontend/routes.xml configuration:
				<router id='standard'>
				<route id='my_route' frontName='test'>
					<module name='MyCompany_MyModule' />
				</route>
				</router>
						<br>What is the name of the layout XML file that you need to create to add content to this new page?",
						"question_answers" => "myRoute_test_index.xml;mycompany_mymodule_index_test.xml;my_route_index_test.xml;test_index_test.xml",
						'question_correct_answer' => "my_route_index_test.xml",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You are transitioning maintenance of a Magento build to a content manager. One question she asks you is how can she add a sale banner (widget) to every page on the website?<br>Keeping simplicity in mind<br> what is your answer?",
						"question_answers" => "Add a Javascript snippet into Content > Design > Configuration.;Purchase a 3rd-party module.;Add the widget through the Content > Widgets menu.;Write a code customization to display a widget on every page.",
						'question_correct_answer' => "Add the widget through the Content > Widgets menu.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "What is the purpose of a model (stored directly in the module’s Model/ directory)?",
						"question_answers" => "A structure that represents a data entity in OOP-friendly terms.;A class that retrieves multiple rows from a database.;A collection of functions to retrieve or format data in the database.;An entry-point for functions related to a row of data in the database.",
						'question_correct_answer' => "A structure that represents a data entity in OOP-friendly terms.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "How do you persist an entity model to the database?",
						"question_answers" => "Call the save() method on the entity's repository class.;Call the update() or insert() methods on the entity model's class.;Call the persist() method on the entity's collection.;Use the static \Magento\Framework\Model::save() method.",
						'question_correct_answer' => "Call the save() method on the entity's repository class.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You need to fetch the product names for all simple, enabled products.<br>What Magento feature do you use?",
						"question_answers" => "Collection;Helper;Resource Model;Repository",
						'question_correct_answer' => "Collection",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You are running trying to load the Magento admin panel and are receiving this error:
						Exception #0 (Magento\Framework\Exception\LocalizedException): Please upgrade your database: Run 'bin/magento setup:upgrade' from the Magento root directory.
						The following modules are outdated:
						MyCompany_MyModule schema: current version - 24, required version - 21
						MyCompany_MyModule data: current version - 24, required version - 21

						You have run bin/magento setup:upgrade multiple times, but this error continues to appear. What is the resolution?",
						"question_answers" => "The module’s version in setup_module needs to be manually reduced.;The cache needs to be flushed.;The deploy mode needs to be changed to “production'.;bin/magento setup:upgrade --force",
						'question_correct_answer' => "The module’s version in setup_module needs to be manually reduced.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You are building a new module and need to add a new CMS block to the database.<br>Keeping ease of installation in mind; how do you create this block?",
						"question_answers" => "Create Setup/UpgradeData.php and add the block in the upgrade() method.;Create an observer for the setup_execute event and add the block.;Create a new migration in migrations and add the block in the execute() method.;Instruct the end user to manually create the block in the Magento admin.",
						'question_correct_answer' => "Create Setup/UpgradeData.php and add the block in the upgrade() method.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "Keeping compatibility and upgradeability in mind<br> how do you add a new table to the database?",
						"question_answers" => "CLI command bin/magento create:table [TABLE_NAME];SchemaSetupInterface::getConnection()->query('CREATE TABLE [TABLE_NAME] ...');SchemaSetupInterface::getConnection()->createTable($/tableDefinition);SSH into the server and run CREATE TABLE [TABLE_NAME] ...",
						'question_correct_answer' => "SchemaSetupInterface::getConnection()->createTable($/tableDefinition)",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are writing a data patch that will convert the data in a column from a PHP serialized value to JSON. The problem is that you also have another data patch that updates some sample data. This sample data patch must be run after the data conversion patch.<br>How do you accomplish this?",
						"question_answers" => "Implement the getDependencies method.;Configure the patch relationship in etc/db_schema.xml.;Place in separate modules and make one module dependent on the other.;Patches must be independent of each other.",
						'question_correct_answer'  => "Implement the getDependencies method.",
						'question_image_links'  => ""
					),


					array(
						"question_text" => "You have just completed building a new module and have tested that it works. You are now are ready to commit the code for review. This module uses extension attributes and stores data about orders,but in a separate table.<br>What action must you take to ensure that this module will behave properly in production?",
						"question_answers" => "Ensure composer.json contains the correct version.;Create a schema whitelist for the module.;Double-check that the install process properly executes.;Add the module’s name to app/etc/config.php.",
						'question_correct_answer' => "Create a schema whitelist for the module.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have created a router in MyCompany/MyModule/etc/adminhtml/router.xml (see code below). The URL you need to handle is: /admin_dev/functionality/product/.<br>What controller action file path do you create?",
						"question_answers" => "Controller/Product/Index.php;Controller/Adminhtml/Product/Index.php;Controller/Product.php;Controller/Functionality/Product/Index.php",
						'question_correct_answer' => "Controller/Adminhtml/Product/Index.php",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are adding a new configuration value to Store Configuration.<br>In which file do you specify the default, hardcoded value?",
						"question_answers" => "etc/adminhtml/system.xml;etc/default/config.xml;etc/config.xml;etc/defaults.xml",
						'question_correct_answer' => "etc/config.xml",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have added a new ACL entry into your module’s etc/acl.xml. However, it is not appearing in System > User Roles > Role Resources.<br>What is the solution?",
						"question_answers" => "You need to clean out the generated/ directory.;You need to clear the cache.;You have to re-index the website.;You need to add the resource ID into a controller or etc/adminhtml/menu.xml to show that it is used.",
						'question_correct_answer' => "You need to clear the cache.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "In building a new Magento module, you need to add a menu option so that admin users can browse to the new functionality. The menu item needs to appear in the Catalog menu.<br>What is the correct configuration to accomplish this?",
						"question_answers" => "In etc/admin_menu.xml<br><add id='MyCompany_MyModule::functionality' under='Magento_Catalog::catalog' ... />
						;In etc/menu.xml<br> <menu><reference id='Magento_Catalog::catalog'><item id='MyCompany_MyModule::functionality' ... /></reference></menu>
						;In etc/adminhtml/menu.xml<br><menu><add id='MyCompany_MyModule::functionality' parent='Magento_Catalog::catalog'  ... /></menu>
						;In etc/adminhtml/resource.xml<br> <resource><menu><reference id='Magento_Catalog'><item id='MyCompany_MyModule' ... /></reference></menu></resource>",
						'question_correct_answer' => "In etc/adminhtml/menu.xml<br><menu><add id='MyCompany_MyModule::functionality' parent='Magento_Catalog::catalog'  ... /></menu>",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You just created a new Magento admin user with bin/magento admin:user:create. The next step is to assign that user to a particular set of permissions.<br>How do you do this on the command line?",
						"question_answers" => "bin/magento admin:user:modify --user-id=1 --role-id=1;This is not possible to do on the command line.;bin/magento admin:attach:permissions --user-id=1 --role-description='Administrators';bin/magento admin:user:permissions --user-id=1 –permissions='Administrators'",
						'question_correct_answer' => "This is not possible to do on the command line.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "In the Magento\Catalog\Model\Product model; there are many references to getTypeInstance().<br>What is the purpose of a type instance?",
						"question_answers" => "The type instance references the flat tables (if enabled), yielding better performance.;The type instance is the non-deprecated way to access information about a product.;The type instance loads the product from the database.;The type instance provides product-type-specific information to the product model.",
						'question_correct_answer' => "The type instance provides product-type-specific information to the product model.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are asked to apply a layout XML update to a category and all products associated with that category.<br>Keeping simplicity in mind; how do you do this?",
						"question_answers" => "Add the update XML into the category’s Layout Update XML and also apply it to each product.;Go to Content > Design Updates and apply the layout XML updates for all URLs that contain the category’s URL Key.;Add the layout XML update into the view/frontend/layout/catalog_category_view.xml file in your module.;Place the update XML into the category’s Layout Update XML and check “Apply Design to Products'.",
						'question_correct_answer' => "Place the update XML into the category’s Layout Update XML and check “Apply Design to Products'.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are asked to enabled layered navigation on a category.<br>How do you make the sidebar show available filters?",
						"question_answers" => "Change the category’s Layered Navigation = 'Enabled'.;Enable “Is Anchor' on the category.;In Store > Configuration > Catalog > Categories > Enable Layered Navigation = “Yes'.;Change the category’s design layout to 'Layered Navigation'.",
						'question_correct_answer' => "Enable “Is Anchor' on the category.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have created a new product type and are needing to adjust how this product looks in the shopping cart.<br>Which layout XML file contains the instructions for how these items are represented in the cart?",
						"question_answers" => "checkout_cart_item_renderers.xml;checkout_item_price_renderers.xml;checkout_cart_configure_type_simple.xml;checkout_cart_index.xml",
						'question_correct_answer' => "checkout_cart_item_renderers.xml",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are asked to prevent creating a shipment for an order if the sales_order table has a custom column; is_fraud; set to 1.<br>How do you accomplish this?",
						"question_answers" => "Create an after plugin for the Order model’s canShip method.;Create an observer for the sales_order_before_ship event.;Override the Order\Shipment model’s save() method to throw an exception.;Use di.xml to add the filter; order:is_fraud=0 to the validators property in the OrderShipmentValidator model.",
						'question_correct_answer' => "Create an after plugin for the Order model’s canShip method.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are needing to make customizations to the order history grid in the Customer account area.<br>In which module is this found?",
						"question_answers" => "Magento_Payment;Magento_Customer;Magento_CustomerAnalytics;Magento_Sales",
						'question_correct_answer' => "Magento_Customer",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have used a setup script to add a new customer attribute, Is Business. Unfortunately, this attribute is not appearing on the frontend or in the admin panel.<br>What is the solution to get this attribute to appear in the admin panel?",
						"question_answers" => "Clear the cache.;Add the attribute to the adminhtml_customer form (in customer_form_attribute).;Override the admin customer form class and add the attribute field.;Re-index the store.",
						'question_correct_answer' => "Add the attribute to the adminhtml_customer form (in customer_form_attribute).",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have created a new Customer Address attribute to specify whether or not someone is at a residential address. Unfortunately; this new attribute is not appearing when you go to the frontend > My Account > Address Book > Edit. <br> How do you solve this?",
						"question_answers" => "Clear the cache.;Override Magento_Customer::address/edit.phtml.;Add the attribute to the customer_address form (in customer_form_attribute).;Re-index the store.",
						'question_correct_answer' => "Add the attribute to the customer_address form (in customer_form_attribute).",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "Which configuration declaration will successfully add a file uploader into Stores > Configuration?",
						"question_answers" => "<field id='my_uploader' type='Magento\Config\Block\System\Config\Form\Field\File' showInDefault='1' targetDirectory='my-directory'>
					<label>File Upload</label>
				</field>;<field id='my_uploader' type='Magento\Config\Block\System\Config\Form\Field\File' showInDefault='1'>
					<label>File Upload</label>
					<backend_model>Magento\Config\Model\Config\Backend\File</backend_model>
					<upload_dir config='system' scope_info='1'>my-directory</upload_dir>
				</field>;<field id='my_uploader' type='file' showInDefault='1'>
					<label translate='this'>File Upload</label>
					<configuration>Magento\Config\Model\Config\FileUploader</configuration>
				</field>;<field id='my_uploader' type='file' showInDefault='1'>
					<label>File Upload</label>
					<target_directory>my-directory</target_directory>
				</field>",
						'question_correct_answer' => "<field id='my_uploader' type='Magento\Config\Block\System\Config\Form\Field\File' showInDefault='1'>
					<label>File Upload</label>
					<backend_model>Magento\Config\Model\Config\Backend\File</backend_model>
					<upload_dir config='system' scope_info='1'>my-directory</upload_dir>
				</field>",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are creating a controller to return HTML to the frontend.<br>What interface do you return from the controller's execute method?",
						"question_answers" => "\Magento\Framework\Result\ActionInterface;\Magento\Framework\ResponseInterface;\Magento\Frontend\Controller\OutputInterface;\Magento\Framework\Controller\ResultInterface",
						'question_correct_answer' => "\Magento\Framework\Controller\ResultInterface",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You are reviewing vendor/magento/module-config/etc/di.xml and see below code.<br>What does this code accomplish?<br>
				<type name='Magento\Config\Model\Config\Structure\Reader'>
					<arguments>
						<argument name='compiler' xsi:type='object'>Magento\Framework\View\TemplateEngine\Xhtml\ConfigCompiler</argument>
					</arguments>
				</type>",
						"question_answers" => "It instantiates a ConfigCompiler class and injects a Reader class.;It specifies which object should be used for the compiler constructor parameter.;It creates a new object type and calls the setCompiler method.;It adds the ConfigCompiler class to the $/arguments array in Reader.",
						'question_correct_answer' => "It specifies which object should be used for the compiler constructor parameter.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "In a etc/crontab.xml file inside of a module, you see this code:
				<group id='default'>
					<job name='my_cron_job' instance='MyCompany\MyModule\Cron' method='execute'>
						<schedule>30 10 * * 1</schedule>
					</job>
				</group>What is the purpose of the <group id='default'> node?",
						"question_answers" => "If one item in the group fails; it will prevent subsequent items from running.;The group is a placeholder for future improvements.;The group allows a store administrator to configure schedule generation and logging.;The group ensures that tasks will be run together.",
						'question_correct_answer' => "The group allows a store administrator to configure schedule generation and logging.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "What are the requirements for when a shipment can be created?<br>Choose 2;",
						"question_answers" => "When items have been invoiced.;When there are items that haven't been shipped,refunded or cancelled.;When items are not backordered.;When there are non-virtual items.",
						'question_correct_answer' => "When items have been invoiced.;When there are items that haven't been shipped,refunded or cancelled.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "When writing controllers for the Magento admin panel; it is important to specify which permissions are associated with that page.<br>How do you accomplish this?<br>Choose 2",
						"question_answers" => "In the module declaration in etc/adminhtml/routes.xml,add: <controller path='...' resource='...'/>;Override _isAllowed() in the controller.;In the execute method check $/this->authentication->allowed(...),.;Add const ADMIN_RESOURCE = ‘resource’,to the controller.",
						'question_correct_answer' => "Override _isAllowed() in the controller.;Add const ADMIN_RESOURCE = ‘resource’, to the controller.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "What is the default variable used in a template to access the template's rendering class?",
						"question_answers" => "$/parent;$/logic;$/block;$/this",
						'question_correct_answer' => "$/block",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You need to wrap a number of blocks in an HTML tag with the class attribute specified in it<br>Keeping simplicity and maintainability in mind; how do you accomplish this?",
						"question_answers" => "Use a layout XML container directive.;Merge the block templates together inside an HTML tag.;Create a new template that renders the blocks children.;Use a TextList block.",
						'question_correct_answer' => "Use a layout XML container directive.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are a module vendor and are providing a version of your module that is friendly to DB Schema in Magento 2.3. You would like to split out your old upgrade scripts to the new patch format.<br>How do you ensure that these scripts will not be executed twice?",
						"question_answers" => "Specify the applicable module version when you add the patch to etc/db_schema.xml.;Specify the applicable version in your setup script.;Combine all upgrades into one patch and check a saved value in the config table.;Provide instructions on how to add applicable patches to patch_list table.",
						'question_correct_answer' => "Specify the applicable version in your setup script.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have copied a module’s code into the app/code directory and run bin/magento setup:upgrade. However; you are not able to browse to a page that should be available.<br>What is the solution?",
						"question_answers" => "Run bin/magento module:enable [MODULE NAME].;Run bin/magento cache:clean.;Double-check that all files were correctly copied.;Navigate to the module’s configuration in Stores > Configuration and enable it.",
						'question_correct_answer' => "Run bin/magento module:enable [MODULE NAME].",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are building out a new module and have created this file: app/code/MyCompany/MyModule/Controller/Index/Welcome.php<br> What is the namespace … for this file?",
						"question_answers" => "namespace MyModule\Controller\Index\Welcome;namespace MyCompany\MyModule\Controller\Index;namespace MyCompany\MyModule\Controller\Index\Welcome;namespace Magento\MyCompany\MyModule\Controller\Index",
						'question_correct_answer' => "namespace MyCompany\MyModule\Controller\Index",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You need to render a product's name and price in a template on the frontend.<br>How do you do this?",
						"question_answers" => "Inject the product into the block using layout XML.;Use the ObjectManager in the template to load the product and echo the necessary information.;Create an observer for the view_block_abstract_to_html_after and call setData on the block with the product.;Inject ProductRepositoryInterface into a new view model and provide the appropriate information through methods.",
						'question_correct_answer' => "Inject ProductRepositoryInterface into a new view model and provide the appropriate information through methods.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "What is the correct hierarchy for the etc/acl.xml file?",
						"question_answers" => "acl > resources > resource > resource > resource …;acl > elements > children > element > children …;acl > children > resource > children > resource …;acl > permissions > items > permission > items …",
						'question_correct_answer' => "acl > resources > resource > resource > resource …",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are tasked with changing a column’s name in a module built for a merchant using Magento 2.3.<br>After changing the column’s name in etc/db_schema.xml; what two actions do you take?<br>Choose 2",
						"question_answers" => "Create a patch file to delete the old column.;Use the migrateDataFrom keyphrase.;Increase the module’s version.;Re-generate the module’s whitelist.",
						'question_correct_answer' => "Use the migrateDataFrom keyphrase.;Re-generate the module’s whitelist.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are tasked with selecting all orders that are in the pending status from the database. This information will be displayed in the customer account area. Here is what you have written so far:
						<br>$/repository = $/this->orderRepository;<br>$/repository->getList(/* … what goes here … */),<br>What code below will run in the above /* … what goes here … */ snippet?",
						"question_answers" => "[‘status’ => [‘eq’ => ‘processing’]];$/this->searchCriteriaBuilder->addFilter(‘status’, ‘processing’);$/this->searchCriteriaBuilder->addFilter(‘status’, ‘processing’)->create();$/repository->getFilter(‘status’, ‘processing’)",
						'question_correct_answer' => "$/this->searchCriteriaBuilder->addFilter(‘status’, ‘processing’)->create()",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "When a customer adds a configurable product to the shopping cart; how many rows are created in the quote_item table?",
						"question_answers" => "1: representing the child product;1: representing the configurable product;2: one for the configurable product and one for the child product;3: one for the configurable product, one to link the configurable and the child, and one for the child product",
						'question_correct_answer' => "2: one for the configurable product and one for the child product",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are building out an automated deploy system for Magento. As part of this process, you need to ensure that some store configuration value for [CONFIG PATH] is properly set.<br>Keeping maintainability in mind, how do you do this?",
						"question_answers" => "Run bin/magento config:set [CONFIG PATH] 0.;Write [CONFIG PATH] => false into app/etc/config.php.;Execute an UPDATE script in the database.;Create a console command to update the configuration value.",
						'question_correct_answer' => "Run bin/magento config:set [CONFIG PATH] 0.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are troubleshooting a URL rewrite with these parameters:<br>Request Path: my-old-product.html<br>Target Path: my-correct-url.html<br>Redirect Type: Rewrite.<br>The problem is that the new page displays at the old URL.<br>Keeping simplicity in mind; how do you fix this?",
						"question_answers" => "Add the redirect to the .htaccess file.;Change the Target Path to be a controller action URL, such as cms/page/view/id/1;Create a custom module to handle the redirect.;Change the Redirect Type to be 301 (permanent).",
						'question_correct_answer' => "Change the Redirect Type to be 301 (permanent).",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You need to adjust the functionality of this method (defined in vendor/magento/module-quote/Model/Quote/Item/AbstractItem.php) for all classes that extend it:<br>Abstract public function getQuote(),<br>How do you tap into this? ",
						"question_answers" => "Locate the closest place that an event is triggered and observe the event.;Use a plugin.;Use a proxy class.;Override all classes the extend AbstractItem",
						'question_correct_answer' => "Use a plugin",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "Magento provides a production mode that should be utilized when a site is publicly accessible.<br>Why is it important to use this mode?",
						"question_answers" => "Production mode always compiles the LESS style sheets.;Production mode enables automatic nightly backups of customer data.;Production mode enables fast download times by enabling the caches.;Production mode prevents verbose error messages from being displayed to a visitor.",
						'question_correct_answer' => "Production mode prevents verbose error messages from being displayed to a visitor.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are creating a new model to represent scenarios when a product will ship.<br>What method do you override to initialize the model and specify which resource model should be used?",
						"question_answers" => "public function _initialize();public function _start();public function __construct(...),protected function _construct()",
						'question_correct_answer' => "protected function _construct()",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have built an ERP integration that manages products and the categories with which the products are associated. In this integration; you import the category product associations directly into the catalog_category_product table with a SQL script. Unfortunately; the products are not appearing.<br>How do you make the products appear?",
						"question_answers" => "Create a script to programmatically save each product.;Import the same products into the catalog_product_category_fields table.;Re-index affected categories.;Clear the cache.",
						'question_correct_answer' => "Re-index affected categories.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are performing a code review on a 3rd-party module and see this:<br> $/shippingEstimates = $/this->shippingEstimatesFactory->create(),<br> $/shippingEstimates->setName($/name),<br>$/shippingEstimates->setTimeToDelivery($/timeToDelivery),<br>$/shippingEstimates->save(),<br> What change must be made to bring up to Magento coding standards?",
						"question_answers" => "Instead of using magic methods, use the setData() method.;Don’t use a factory, instead call the create method directly on the model.;Use the ShippingEstimates resource model to save the model, instead of calling the save method on the model itself.;In the factory create method, an array of $/data values should be sent.",
						'question_correct_answer' => "Use the ShippingEstimates resource model to save the model, instead of calling the save method on the model itself.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are creating a controller path (and menu item) that must only be visible when the admin user has the appropriate ACL credentials. Here is the code you have written:<br><add id='MyCompany_MyModule::my_menu_item' title='My Menu Item' module='MyCompany_MyModule' parent='Magento_Reports::report' action='module/customer/index' resource='Magento_Backend::admin'/><br>Unfortunately; this menu item is always visible.<br>What is the solution?",
						"question_answers" => "Add a new attribute: acl='...' (value being a custom ACL as specified in your module’s etc/acl.xml).;Specify the ACL permission in the associated controller.;Change the resource attribute to a custom one as specified in your module’s etc/acl.xml.;Flush the cache.",
						'question_correct_answer' => "Change the resource attribute to a custom one as specified in your module’s etc/acl.xml.",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "What three scopes are available for configuration in Store > Configuration?<br>Choose 3",
						"question_answers" => "System;Store View;Store;Website;Global / default",
						'question_correct_answer' => "Store View;Website;Global / default",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You need to make the customer's prefix attribute required.<br>Keeping upgradeability in mind; how do you make this change?",
						"question_answers" => "Run the bin/magento customer:attribute:require prefix,$/eavSetup->updateAttribute(Customer::ENTITY, $/attributeId, 'is_required', true);Manually adjust the database.;Add <prefix><is_required>true</is_required></prefix> to etc/customer_attributes.xml.",
						'question_correct_answer' => "$/eavSetup->updateAttribute(Customer::ENTITY; $/attributeId, 'is_required', true),",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You are building a multi-lingual theme. The primary language is English; with a German translation. In the theme; you created etc/translate/de_DE.csv with the contents: 'Price;Preis'. However; this word is not translated.<br>How do you fix it?",
						"question_answers" => "The translation has an incorrect delimiter. It should be a colon (':').;The theme needs to be configured as multi-lingual in etc/view.xml;The translation hasn't been built in the Magento CLI.;The location of de_DE.csv is incorrect. It needs to be i18n/de_DE.csv.",
						'question_correct_answer' => "The location of de_DE.csv is incorrect. It needs to be i18n/de_DE.csv.",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You need to insert a block as the first item in the category.products container.<br>How do you do this?",
						"question_answers" => "<block name='...' template='...'/>;
						<block name='...' template='...'>
						<action method='setBlockOrder'>
						<arguments>
							<argument name='name' xsi:type='string'>category.header</argument>
							<argument name='position' xsi:type='int'>0</argument>
						</arguments>
						</action>;
						<block name='...' before='-' template='...'/>;
						<block name='...' template='...'>
						<arguments>
							<argument name='position' xsi:type='int'>0</argument>
						</arguments>
						</block>",
						'question_correct_answer' => "<block name='...' before='-' template='...'/>",
						'question_image_links'    => ""
					),
					array(
						"question_text" => "You are asked to allow multiple shipping addresses for customers in a specific customer group.<br>How do you do this?",
						"question_answers" => "This is already available and is always enabled;This is custom functionality and can only be had with modifications;Admin > Customers > Customer Groups > Enable multiple shipping addresses;Store > Configuration > Customer > Enable multiple shipping addresses",
						'question_correct_answer' => "This is custom functionality and can only be had with modifications",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You have written the following into a setup script:<br>$/setup->getConnection()->addColumn(‘mymodule_mytable’,'new_column',Table::TYPE_TEXT),<br>Unfortunately; someone had already manually created the column in the database and that is throwing an error: Column `new_column` already exists in `mymodule_mytable`.<br>Keeping simplicity in mind; what do you add into an if-statement wrapping this code to prevent this error from happening again?",
						"question_answers" => "$/setup->getConnection()->fetchPairs(‘DESCRIBE `mymodule_mytable`)[4];$/setup->getConnection()->getTable(‘mymodule_mytable’)->hasColumn(‘new_column’);$/setup->getConnection()->fetchOne(‘SHOW COLUMNS FROM `mymodule_mytable` MATCHING ‘new_column’);$/setup->getConnection()->tableColumnExists(‘mymodule_mytable’,‘new_column’)",
						'question_correct_answer' => "$/setup->getConnection()->tableColumnExists(‘mymodule_mytable’,‘new_column’)",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "You need to add a block to a specific category page.<br>Keeping simplicity in mind, how do you do this?",
						"question_answers" => "Setup a design change with required XML update.;Create view/frontend/layout/catalog_category_view.xml with required changes.;Use the Layout XML Update field in a category.;Override Magento_Catalog::category/description.phtml and use ObjectManager to create block.",
						'question_correct_answer' => "Use the Layout XML Update field in a category.",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "A merchant has sells a style of pants that has different colors and sizes. These items are manufactured and then stocked in the warehouse before shipment.<br>What product type should they use for this product?",
						"question_answers" => "Bundle;Category with a simple product for each variation;Configurable;A custom product type",
						'question_correct_answer' => "Configurable",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You are tasked with creating a new module to render integrate with a chat client.<br>What three files are required by Magento for a skeleton module?<br>Choose 3",
						"question_answers" => "Setup/UpgradeSchema.php;etc/module.xml;etc/events.xml;composer.json;registration.php",
						'question_correct_answer' => "etc/module.xml;composer.json;registration.php",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You are creating a new model triad (model, resource model and collection). You will be importing data from a CSV file into the database using a foreach loop.Here is what you have written so far:<br>
						foreach($/row as $/values) {<br> $/this->myModel->setData($/values),</br>$/this->myResourceModel->save($/this->myModel),</br> }<br>
						What do you need to do to the above to ensure that the data will save to new rows?",
						"question_answers" => "You need to configure di.xml to send the MyModel\Proxy class instead of MyModel.;This will work as expected: a new row is added to the database on each iteration.;You need to utilize a factory to create a new instance of your model.;You need to pass the $/values array to the myResourceModel->save method.",
						'question_correct_answer' => "You need to utilize a factory to create a new instance of your model.",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You are working on a website where the products are shipped from different warehouses based on inventory levels. This data is loaded from the custom mymodule_inventory_warehouse table.<br>Keeping simplicity in mind; how do you make this inventory data available in a product?",
						"question_answers" => "Specify a new implementation for the ProductInterface and add appropriate methods.;Create a new model; resource model and collection and separately load the data as referenced by the product ID.;Create a entityBeforeLoad observer, load the data and call the product's setData method.;Create an extension attribute in etc/extension_attributes.xml.",
						'question_correct_answer' => "Create an extension attribute in etc/extension_attributes.xml.",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You are adding functionality into a module that needs some data to be updated every time the setup:upgrade command is run.<br>In what file in your module do you make this happen?",
						"question_answers" => "Setup/Recurring.php;Setup/Versions/EveryTime.php;Setup/InstallData.php;Setup/UpgradeData.php",
						'question_correct_answer' => "Setup/Recurring.php",
						'question_image_links'    => ""
					),


					array(
						"question_text" => "In building MyCompany_MyModule, you need to create a new tab in a customer's account area.How do you do this?",
						"question_answers" => "Create an observer for the collect_customer_account_links event.Create an observer for the collect_customer_account_links event.;Add a SortLinkInterface block to view/frontend/layout/customer_account.xml;Override the Magento_Customer::account/sidebar.phtml and add the new menu item.;Use a node to configure the account UI component in view/frontend/ui_component/customer_account.xml",
						'question_correct_answer' => "Add a SortLinkInterface block to view/frontend/layout/customer_account.xml",
						'question_image_links'    => ""
					),

					array(
						"question_text" => "You are creating a new theme (MyCompany_MyTheme) that will modify parts of the Magento Luma theme.<br>How do you specify that MyCompany_MyTheme inherits Magento Luma?",
						"question_answers" => "Update the database’s theme column.;In the theme’s parent configuration file, add MyCompany_MyTheme into the <children/> node.;In the theme configuration file’s <theme/> node, add <inherits>magento/luma</inherits>.; In the theme configuration file’s <theme/> node, add <parent>magento/luma</parent>.",
						"question_correct_answer" => "In the theme configuration file’s <theme/> node, add <parent>magento/luma</parent>.",
						"question_image_links" => ""
					)
					);
			shuffle($questionBank);
			
			return $questionBank;
            
        }
      
}