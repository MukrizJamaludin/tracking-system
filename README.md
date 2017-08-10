# Location Tracking System

Location tracking system is a system that allow users to get their location on request and check other's people last location on request by using this application.

### Features
  - Connect to custom web service address
  - Save and load user's location data from database
  - Get user's location on request
  - Get friend's last location on request

### Developers
- Mukriz Jamaludin (Project Manager)
- Nazeb Zurati (Active contributor)

### Tech

Location Tracking System uses a number of open source projects to work properly:

* Node.js
* Cordova
* jQuery
* Bootstrap
* Google Map API
* XAMPP - Apache, mySQL

... and of course, this Location Tracking System is an open source project.

### Installation

Location Tracking System requires [Node.js](https://nodejs.org/) to run.

Install cordova package as global

```sh
$ npm install -g cordova
```

To build the Location Tracking System for android, it requires [Java JDK](http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html) and [Android SDK](https://developer.android.com/studio/index.html) (Bundles with Android Studio). If you have install and configure these 2 componenets, you can build an Android application by:

```sh
$ cordova build android
```

### Usage

There will be 2 folders in this repository:
1. Cordova : The Application Folder
-- Cordova application can be build here (run 'cordova build android' here as stated on the second part of the installation part above)
-- Please make sure to run node.js command prompt to use the npm
-- Please use 'cd "path-to-this-folder"' to execute npm command

2. Website : The Web Service Folder
-- Put this folder in the 'htdocs' folder in xampp to allow the access by using localhost
-- Please import the sql file into your database (Recommended to use 'tracking_system' for the database name) before the web service can be used

### Development

Want to contribute? Great! We welcome you to contribute by testing the application for bugs and issue so that we can fix for you. Please post at the issues tab for error and issues regarding this system only.

