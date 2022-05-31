#EmailSystem
#Apache– this is the core program that performs the hosting services. Apache program is very efficient in hosting HTML files as well as other static web documents.

MySQL– it offers a database that will contain all your web content. Dynamic web pages need to store data from time to time thus require a database. Examples of such data include usernames, passwords, and emails.

PHP– this is perhaps the widest spread language for creating dynamic web content. Some of the popular websites known to run on PHP code are Facebook and WordPress.

Step 1: Installing the WAMP Software

Visit the WampServer website and download the latest version. Choose either 32 or 64 bit depending on your operating system. The package comes with the most recent installments of Apache, MySQL, and PHP. Run the .exe file in the WAMP setup you have downloaded. You will receive installation prompts that are straightforward. Click “next” while maintaining the default values to continue with the installation. Choose the browser of your choice or just hit “open” and the Web Server will use your default PC browser.

As you carry out this process, windows firewall may reject some features of Apache. Therefore, make sure to make an exception when you receive a security alert pop up. After the installation is complete, mark the box labeled “Start WampServer 2 now” before eventually clicking the “Finish” button.

Step 2: Navigating the WAMP Server

If you’d like to change the pages displayed by the web server, go to the www directory by clicking the WAMP icon in the notification pane. The directory is automatically created during installation and can be found in local disk C (c:\\wamp\\www). You also have the option of creating subdirectories referred to as projects in WampServer. These will come in handy in storing HTML or PHP files. If you install WordPress for instance, its installation files will be saved in the directories. You can update any changes within the application by clicking the refresh button.

Step 3: Create an HTML or PHP Page

This section shows you how to test the WebServer. Use a web development program such as Notepad to develop a simple PHP or HTML page. Go to ‘save as’ and give it any name and add the extension .php (e.g. “name.php”). Set c:\\wamp\\www to be the destination of the saved file. Return to WebServer and click refresh to update these changes. Your data will be updated in the www directory. To test it, go to http://localhost/name.php through your browser. You will be taken to your new web page where you will see the details of your PHP installation.

Step 4: Configuring MySQL

You can begin configuring your MySQL databases by opening the phpMyAdmin panel in the menu. Through here, you can open a new browser window. The admin username automatically sets to “root” after which you are prompted to provide a password. For now, you can leave the password field empty. You can also customize the MySQL databases or create new ones based on your preference. If you are using CMS software such as WordPress, they provide you with a database by default.

Step 5: Setting the Site to be Publicly Visible

At this stage, your website is accessible just to the computer in which you installed the WebServer application. This can be great if you want to use the Web Server for web development and testing practices. In this case, however, you want the rest of the world to see the contents of your site. To make it public, hit the WampServer icon and select the “Put Online” option.