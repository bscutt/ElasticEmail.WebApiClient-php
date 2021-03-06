<?php
	namespace ElasticEmailEnums; 

class Account
{
    /**
     * Code used for tax purposes.
     */
    public /*string*/ $TaxCode;

    /**
     * Public key for limited access to your account such as contact/add so you can use it safely on public websites.
     */
    public /*string*/ $PublicAccountID;

    /**
     * ApiKey that gives you access to our SMTP and HTTP API's.
     */
    public /*string*/ $ApiKey;

    /**
     * Second ApiKey that gives you access to our SMTP and HTTP API's.  Used mainly for changing ApiKeys without disrupting services.
     */
    public /*string*/ $ApiKey2;

    /**
     * True, if account is a subaccount. Otherwise, false
     */
    public /*bool*/ $IsSub;

    /**
     * The number of subaccounts this account has.
     */
    public /*long*/ $SubAccountsCount;

    /**
     * Number of status: 1 - Active
     */
    public /*int*/ $StatusNumber;

    /**
     * Account status: Active
     */
    public /*string*/ $StatusFormatted;

    /**
     * URL form for payments.
     */
    public /*string*/ $PaymentFormUrl;

    /**
     * URL to your logo image.
     */
    public /*string*/ $LogoUrl;

    /**
     * HTTP address of your website.
     */
    public /*string*/ $Website;

    /**
     * True: Turn on or off ability to send mails under your brand. Otherwise, false
     */
    public /*bool*/ $EnablePrivateBranding;

    /**
     * Address to your support.
     */
    public /*string*/ $SupportLink;

    /**
     * Subdomain for your rebranded service
     */
    public /*string*/ $PrivateBrandingUrl;

    /**
     * First name.
     */
    public /*string*/ $FirstName;

    /**
     * Last name.
     */
    public /*string*/ $LastName;

    /**
     * Company name.
     */
    public /*string*/ $Company;

    /**
     * First line of address.
     */
    public /*string*/ $Address1;

    /**
     * Second line of address.
     */
    public /*string*/ $Address2;

    /**
     * City.
     */
    public /*string*/ $City;

    /**
     * State or province.
     */
    public /*string*/ $State;

    /**
     * Zip/postal code.
     */
    public /*string*/ $Zip;

    /**
     * Numeric ID of country. A file with the list of countries is available <a href="http://api.elasticemail.com/public/countries"><b>here</b></a>
     */
    public /*?int*/ $CountryID;

    /**
     * Phone number
     */
    public /*string*/ $Phone;

    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * URL for affiliating.
     */
    public /*string*/ $AffiliateLink;

    /**
     * Numeric reputation
     */
    public /*double*/ $Reputation;

    /**
     * Amount of emails sent from this account
     */
    public /*long*/ $TotalEmailsSent;

    /**
     * Amount of emails sent from this account
     */
    public /*?long*/ $MonthlyEmailsSent;

    /**
     * Amount of emails sent from this account
     */
    public /*decimal*/ $Credit;

    /**
     * Amount of email credits
     */
    public /*int*/ $EmailCredits;

    /**
     * Amount of emails sent from this account
     */
    public /*decimal*/ $PricePerEmail;

    /**
     * Why your clients are receiving your emails.
     */
    public /*string*/ $DeliveryReason;

    /**
     * URL for making payments.
     */
    public /*string*/ $AccountPaymentUrl;

    /**
     * Address of SMTP server.
     */
    public /*string*/ $Smtp;

    /**
     * Address of alternative SMTP server.
     */
    public /*string*/ $SmtpAlternative;

    /**
     * Status of automatic payments configuration.
     */
    public /*string*/ $AutoCreditStatus;

    /**
     * When AutoCreditStatus is Enabled, the credit level that triggers the credit to be recharged.
     */
    public /*decimal*/ $AutoCreditLevel;

    /**
     * When AutoCreditStatus is Enabled, the amount of credit to be recharged.
     */
    public /*decimal*/ $AutoCreditAmount;

    /**
     * Amount of emails account can send daily
     */
    public /*int*/ $DailySendLimit;

    /**
     * Creation date.
     */
    public /*DateTime*/ $DateCreated;

    /**
     * True, if you have enabled link tracking. Otherwise, false
     */
    public /*bool*/ $LinkTracking;

    /**
     * Type of content encoding
     */
    public /*string*/ $ContentTransferEncoding;

    /**
     * Amount of Litmus credits
     */
    public /*decimal*/ $LitmusCredits;

    /**
     * Enable contact delivery and optimization tools on your Account.
     */
    public /*bool*/ $EnableContactFeatures;

    /**
     * 
     */
    public /*bool*/ $NeedsSMSVerification;

    /**
     * 
     */
    public /*bool*/ $DisableGlobalContacts;

}
