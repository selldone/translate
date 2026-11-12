<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Εύρος διαχειριστή Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Περιορισμένη πρόσβαση επενδυτών.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Διαβάστε τις λεπτομέρειες του προφίλ χρήστη.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Διαβάστε τον αριθμό τηλεφώνου.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Διαβάστε και ενημερώστε τις αποθηκευμένες διευθύνσεις.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ενημέρωση προφίλ χρήστη.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Κάντε παραγγελίες.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Προβολή ιστορικού παραγγελιών.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Πρόσβαση σε δωροκάρτες.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Επεξεργασία άρθρων.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Διαχείριση ειδοποιήσεων.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Δείτε τη λίστα καταστημάτων.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Επεξεργασία στοιχείων καταστήματος.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Προσθήκη νέου καταστήματος.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Διαγραφή καταστήματος.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Διαχείριση εισιτηρίων υποστήριξης.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Διαχειριστείτε δωροκάρτες.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Δείτε δωροκάρτες.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Διαχείριση συχνών ερωτήσεων.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Προβολή Συνήθεις Ερωτήσεις.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Διαχείριση κατηγοριών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Προβολή κατηγοριών.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Διαχείριση προϊόντων.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Προβολή προϊόντων.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Προβολή αναφορών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Διαχείριση οικονομικών λογαριασμών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Δείτε οικονομικούς λογαριασμούς.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Επεξεργασία σελίδων καταστήματος.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Προβολή σελίδων καταστήματος.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Διαχείριση αποθήκης.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Προβολή αποθήκης.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Διαχειριστείτε την πρόσβαση του προσωπικού.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Προβολή πρόσβασης προσωπικού.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Προβολή παραγγελιών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Διαχείριση παραγγελιών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Διαχείριση εταιρικού προφίλ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Προβολή εταιρικού προφίλ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Διαχείριση εκπτωτικών κωδικών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Δείτε τους εκπτωτικούς κωδικούς.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Διαχείριση κουπονιών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Προβολή κουπονιών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Διαχείριση προσφορών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Δείτε προσφορές.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Διαχειριστείτε τις επιστροφές μετρητών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Προβολή επιστροφών μετρητών.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Διαχείριση λαχειοφόρων αγορών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Προβολή λαχειοφόρων αγορών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Διαχείριση κοινότητας.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Προβολή κοινότητας.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Διαχείριση πελατών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Προβολή πελατών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Διαχείριση συνδρομών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Προβολή συνδρομών.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Προβολή παραγγελιών πωλητών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Διαχειριστείτε παραγγελίες και πληρωμές προμηθευτών.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Διαχείριση παρόχων σύνδεσης.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Προβολή παρόχων σύνδεσης.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Εκτελέστε εντολές AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Προβολή πληροφοριών AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Διαχειριστείτε τις πληρωμές προμηθευτών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Προβολή πληρωμών προμηθευτών.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Προβολή εταιρικού προφίλ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Διαχείριση εταιρικού προφίλ.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Δείτε πληροφορίες πρακτορείου.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Διαχείριση πληροφοριών εταιρείας.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Δείτε σημειώσεις καταστήματος.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Διαχείριση σημειώσεων καταστήματος.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Προβολή στοιχείων προγραμματιστή.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Διαχείριση περιουσιακών στοιχείων προγραμματιστή.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Πρόσβαση σε προσωπικές πληροφορίες και ρυθμίσεις λογαριασμού.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Διαχείριση πορτοφολιού και συναλλαγών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Προβολή συναλλαγών πορτοφολιού.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Δείτε τα διακριτικά και τους πελάτες OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Διαχειριστείτε τα διακριτικά και τους πελάτες OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Διαχειριστείτε τις ρυθμίσεις ασφαλείας.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Διαχείριση θυγατρικών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Προβολή συνεργατών.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Διαχείριση προτύπων εκτύπωσης.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Προβολή προτύπων εκτύπωσης.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Διαχείριση κριτικών.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Προβολή κριτικών.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Προβολή πληροφοριών δημιουργίας εσόδων.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Διαχείριση πληροφοριών δημιουργίας εσόδων.',



    'profile' => 'Διαβάστε τις πληροφορίες προφίλ, όπως το όνομα, τη διεύθυνση email, την εικόνα και την κατάσταση ελέγχου ταυτότητας.',
    'phone' => 'Πρόσβαση στον αριθμό επικοινωνίας',
    'address' => 'Διαβάστε και επεξεργαστείτε τη διεύθυνση από το αποθηκευμένο βιβλίο διευθύνσεων',
    'buy' => 'Παραγγελία & Παραγγελία καταστήματος.',
    'order-history' => 'Διαβάστε το ιστορικό παραγγελιών.',
    'my-gift-cards' => 'Πρόσβαση στις δωροκάρτες μου.',
    'articles' => 'Επεξεργασία άρθρων.',
    'notifications' => 'Αποστολή και λήψη ειδοποιήσεων.',
    'read-shops' => 'Διαβάστε τη λίστα καταστημάτων.',
    'shop-edit' => 'Πρόσβαση επεξεργασίας αποθήκευσης.',
    'shop-contacts' => 'Λήψη και επεξεργασία φορμών επικοινωνίας.',
    'shop-gift-cards' => 'Δημιουργία, επεξεργασία και διαχείριση καρτών.',
    'shop-faqs' => 'Δημιουργήστε, επεξεργαστείτε και διαχειριστείτε τις συχνές ερωτήσεις.',
    'shop-categories' => 'Δημιουργία, επεξεργασία και διαχείριση κατηγοριών.',
    'backoffice-write-products' => 'Εξουσιοδοτήστε τη δημιουργία, την επεξεργασία και τη διαχείριση προϊόντων στο back office.',
    'backoffice-read-products' => 'Εξουσιοδοτήστε την πρόσβαση για προβολή της λίστας προϊόντων και των λεπτομερών πληροφοριών προϊόντων στο back office.',
    'shop-read-reports' => 'Διαβάστε πληροφορίες και αναφορές.',
    'shop-socials' => 'Επεξεργασία κοινωνικών δικτύων καταστημάτων.',
    'shop-accounts' => 'Επεξεργαστείτε και διαγράψτε οικονομικούς λογαριασμούς που συνδέονται με κατάστημα.',
    'shop-menus' => 'Επεξεργασία μενού καταστημάτων.',
    'shop-pages' => 'Επεξεργασία σελίδων καταστήματος.',
    'shop-warehouse' => 'Επεξεργασία αποθήκης καταστήματος',
    'shop-permissions' => 'Προβολή και επεξεργασία πρόσβασης στο κατάστημα.',
    'shop-process-center' => 'Διαχείριση παραγγελιών που λαμβάνονται.',
    'shop-profile' => 'Διαχείριση προφίλ καταστήματος.',
    'shop-discount-code' => 'Διαχείριση εκπτωτικών κωδικών.',
    'shop-coupon' => 'Διαχείριση κουπονιών.',
    'shop-offer' => 'Διαχείριση προσφορών.',
    'shop-cashback' => 'Διαχειριστείτε τις επιστροφές μετρητών.',
    'shop-lottery' => 'Διαχείριση λαχειοφόρων αγορών.',
    'shop-community' => 'Διαχείριση κοινότητας.',
    'shop-customers' => 'Διαχείριση πελατών.',
    'shop-ribbon' => 'Διαχειριστείτε τις συνδρομές Ribbon.',
    'community-read' => 'Διαβάστε την κοινότητα Selldone.',
    'community-write' => 'Γράψτε selldone community.',
    'profile-write' => 'Γράψτε πληροφορίες προφίλ χρήστη.',
    'vendor-read' => 'Πρόσβαση σε ενέργειες εκπλήρωσης παραγγελιών προμηθευτών.',
    'vendor-write' => 'Αλλαγή παραγγελιών, πληρωμής και άλλων πληροφοριών του πωλητή.',
    'connect-providers' => 'Προσθήκη, ανάγνωση και εγγραφή παρόχων σύνδεσης.',
    'personal-identification' => 'Διαβάστε προσωπικές πληροφορίες, προσβάσεις και διαμόρφωση λογαριασμού.',
    'accounts' => 'Πρόσβαση σε πορτοφόλια, ανάγνωση συναλλαγών και ιστορικά ανανέωσης.',
    'shop-add' => 'Προσθήκη νέου καταστήματος.',
    'shop-delete' => 'Αφαιρέστε ένα κατάστημα.',
    'shop-ai-write' => 'Επιτρέπει στον χρήστη να εκτελεί εντολές AI.',
    'shop-ai-read' => 'Επιτρέπει στον χρήστη να έχει πρόσβαση σε πληροφορίες τεχνητής νοημοσύνης χωρίς να εκτελεί εντολές.',
    'vendor-payment' => 'Επιτρέπει στον χρήστη να προσθέτει αρχεία πληρωμών για προμηθευτές ή να μεταφέρει χρήματα μέσω των συνδεδεμένων λογαριασμών του, όπως το Stripe Connect.',
    'company-read' => 'Επιτρέπει την ανάγνωση πληροφοριών εταιρικού προφίλ.',
    'company-write' => 'Επιτρέπει την ανάγνωση και εγγραφή πληροφοριών εταιρικού προφίλ.',
    'agency-read' => 'Επιτρέπει την ανάγνωση πληροφοριών πρακτορείου.',
    'agency-write' => 'Επιτρέπει την ανάγνωση και εγγραφή πληροφοριών πρακτορείου.',
    'note-read' => 'Επιτρέπει την ανάγνωση σημειώσεων καταστήματος.',
    'note-write' => 'Επιτρέπει την ανάγνωση και τη σύνταξη σημειώσεων καταστήματος.',
    'developer-read' => 'Επιτρέπει την ανάγνωση στοιχείων προγραμματιστών.',
    'developer-write' => 'Επιτρέπει την ανάγνωση και εγγραφή στοιχείων προγραμματιστών.',
    'tokens-read' => 'Διαβάστε τα διακριτικά και τους πελάτες Oauth.',
    'tokens-write' => 'Γράψτε μάρκες και πελάτες Oauth.',
];
