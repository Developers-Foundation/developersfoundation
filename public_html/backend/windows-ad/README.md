---
services: active-directory
platforms: php
author: brandwe
---

# Calling the Azure AD Graph API from a PHP web app

This PHP sample application demonstrates how to query data from Azure Active Directory using the Graph API, a RESTful interface that allows programmatic access to tenant data such as users, contacts, groups, roles etc. This application uses OAuth 2.0 Client Credentials to authenticate and get authorization to the Graph API.

## How To Run This Sample

To run this sample you will need:
- Webmatrix http://www.microsoft.com/web/webmatrix/
- An Internet connection
- An Azure subscription (a free trial is sufficient)

Every Azure subscription has an associated Azure Active Directory tenant.  If you don't already have an Azure subscription, you can get a free subscription by signing up at [https://azure.microsoft.com](https://azure.microsoft.com).  All of the Azure AD features used by this sample are available free of charge.

### Step 1:  Clone or download this repository

From your shell or command line:

`git clone git@github.com:Azure-Samples/active-directory-php-graphapi-web.git`

### Step 2:  Run the sample from WebMatrix

The sample app is preconfigured to read data from a Demonstration company (GraphDir1.onMicrosoft.com) in Azure AD. 

### Step 3:  Running this application with your Azure Active Directory tenant

#### Register the Sample app for your own tenant

1. Sign in to the [Azure management portal](https://manage.windowsazure.com).
2. Click on Active Directory in the left hand nav.
3. Click the directory tenant where you wish to register the sample application.
4. Click the Applications tab.
5. In the drawer, click Add.
6. Click "Add an application my organization is developing".
7. Enter a friendly name for the application, for example "WebApp for Azure AD", select "Web Application and/or Web API", and click next.
8. For the sign-on URL, enter the base URL for the sample, which is by default `https://localhost:44322`.
9. For the App ID URI, enter `https://<your_tenant_name>/WebApp`, replacing `<your_tenant_name>` with the domain name of your Azure AD tenant. For Example "https://contoso.com/WebApp".  Click OK to complete the registration.
10. While still in the Azure portal, click the Configure tab of your application.
11. Find the Client ID value and copy it aside, you will need this later when configuring your application.
12. In the Reply URL, add the reply URL address used to return the authorization code returned during Authorization code flow.  For example: "https://localhost:44322/".
All done!  Before moving on to the next step, you need to find the Client ID of your application, and create an App Key.

1. While still in the Azure portal, click the Configure tab of your application.
2. Find the Client ID value and copy it to the clipboard.
3. Add a key - select a key duration of either 1 year or 2 year. When you save this page, the key value will be displayed, copy and  save the value in a safe location - you will need this key later to configurate the Client Credentials for this app - this key value  will not be displayed again, nor retrievable by any other means, so please record it as soon as it is visible from the Azure Portal.
4. Configure Permissions for your applicaiton - under the "Permissions to other applications" section, select application "Windows  Azure Active Directory" (this is the Graph API), and under the first permission column (Application Permissions), select "Read  Diretory data".  This sampleapp doesn't use delegated permssions, so the Permission under Delegated Permissions are not used.

#### Configuring the PHP sample
1. Start Webmatrix, and select Open from the main screen, and select Folder, and navigate to the PHP folder of this project.  
2. Webmatrix will initialize the application 
3. Open the Settings.php file.  update the $appTenantDomainName to be your tenant identifier (any verified domain owned by the tenant, e.g. Contoso.onMicrosoft.com, contoso.com etc.).  update $appPrincipalId to the the Client ID recorded from previous step in the Azure Managment portal.  Update $password with the key value configured in the previous step in the Azure Management Portal. Save changes.
4. Select Run, and try accessing Users, Groups and trying the differential query features.

## About The Code

Coming soon.
