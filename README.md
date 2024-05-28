# DeliPistacna/Greeting
Code sample for GymBean

## Prerequisites
- PHP ^8.1
- Magento/Framework ^103.0
- Composer

## Installation
### 1: Install module
### 1.a) Using composer (Recommended)
Add git repository to composer:
```json
{
    "type": "git",
    "url": "git@github.com:DeliPistacna/magento2_greeting.git"
}
```
Then run:
```shell
composer require delipistacna/magento2_greeting
```
### 1.b) Manual installation
- Download the latest zip from [releases](https://github.com/DeliPistacna/magento2_greeting/releases).
- Extract to app/code folder of your Magento 2 instance

### 2: Run Upgrade
```shell
php bin/magento setup:upgrade
```


## Objective
The objective of the Case Study is to create a simple Magento 2 module, which will add new
configuration to Magento 2 named “Greeting” and be saved as string value. Then create a
working URL “casetudy” ( so URL pattern will look like [[base_url]]/casestudy ), which will
render saved configuration value.
Description
Magento2 framework is one of a few main systems at GymBeam. Framework is used mainly
as an order management and product management system. Other systems cooperate with
Magento2 mostly via native API layer.
You need to create a simple configuration and define a new controller for the Magento 2
system. The goal is to create a Magento 2 module, which follows the best practices of the
framework and creates a new URL defined in the “objective” section.

## Output
The solution should be working and ready to install the Magento2 module which extends the
Magento 2 system with described new features.

