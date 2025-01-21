# Risecommerce Review Reminder Extension
[Magento 2 Review Reminder Email Free Extension](https://risecommerce.com/store/magento2-review-reminder.html). automatically emails customers after every x number of days for defined order statuses and asks to share their shopping experience and reminds to give feedback/review for the product.

For more details about this extension, visit the [Magento 2 Review Reminder Email Free Extension](https://risecommerce.com/store/magento2-review-reminder.html).

If you're looking to enhance your Magento store further, consider hiring a [dedicated Magento developer](https://risecommerce.com/hire-dedicated-magento-developer.html).

For support or inquiries, please visit our [contact page](https://risecommerce.com/contact).

## Support: 
version - 2.3.x, 2.4.x

## How to install Extension

Method I)

1. Download the archive file.
2. Unzip the files
3. Create a folder [Magento_Root]/app/code/Risecommerce/ReviewReminder
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/ReviewReminder'

Method II)

Using Composer 

composer require risecommerce/magento-2-review-reminder-extension:1.0.1

### Enable Extension:
- php bin/magento module:enable Risecommerce_ReviewReminder
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

### Disable Extension:
- php bin/magento module:disable Risecommerce_ReviewReminder
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
