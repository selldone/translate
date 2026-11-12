<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone администраторын хамрах хүрээ.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Хөрөнгө оруулагчдын хандалтыг хязгаарласан.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Хэрэглэгчийн профайлын дэлгэрэнгүй мэдээллийг уншина уу.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Утасны дугаарыг уншина уу.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Хадгалсан хаягуудыг уншиж, шинэчлэх.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Хэрэглэгчийн профайлыг шинэчлэх.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Захиалга өгөх.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Захиалгын түүхийг үзэх.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Бэлгийн карт руу нэвтрэх.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Нийтлэлүүдийг засах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Мэдэгдлийг удирдах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Дэлгүүрийн жагсаалтыг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Дэлгүүрийн дэлгэрэнгүй мэдээллийг засах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Шинэ дэлгүүр нэмэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Дэлгүүр устгах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Туслах тасалбарыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Бэлгийн картыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Бэлгийн картуудыг үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Түгээмэл асуултуудыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Түгээмэл асуултуудыг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Ангилалуудыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Ангилал харах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Бүтээгдэхүүнийг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Бүтээгдэхүүн үзэх.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Тайлан үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Санхүүгийн дансыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Санхүүгийн данс харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Дэлгүүрийн хуудсыг засах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Дэлгүүрийн хуудсыг үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Агуулахыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Агуулахыг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Ажилтны хандалтыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Ажилтны хандалтыг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Захиалга харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Захиалга удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Бизнесийн профайлыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Бизнесийн профайлыг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Хөнгөлөлтийн кодыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Хөнгөлөлтийн кодыг үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Купоныг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Купон үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Саналуудыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Саналуудыг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Бэлэн мөнгө буцааж авах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Бэлэн мөнгө буцааж харах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Сугалаа удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Сугалаа үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Нийгэмлэгийг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Нийгэмлэгийг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Харилцагчдыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Үйлчлүүлэгчийг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Захиалга удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Захиалга харах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Борлуулагчийн захиалгыг үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Борлуулагчийн захиалга, төлбөрийг удирдах.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Холболтын үйлчилгээ үзүүлэгчдийг удирдах.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Холболтын үйлчилгээ үзүүлэгчдийг харах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI тушаалуудыг гүйцэтгэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI мэдээллийг харах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Борлуулагчийн төлбөрийг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Борлуулагчийн төлбөрийг харах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Бизнесийн профайлыг харах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Бизнесийн профайлыг удирдах.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Агентлагийн мэдээллийг харах.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Агентлагийн мэдээллийг удирдах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Дэлгүүрийн тэмдэглэлийг үзэх.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Дэлгүүрийн тэмдэглэлийг удирдах.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Хөгжүүлэгчийн хөрөнгийг харах.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Хөгжүүлэгчийн хөрөнгийг удирдах.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Хувийн мэдээлэл болон бүртгэлийн тохиргоонд хандах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Түрийвч болон гүйлгээг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Түрийвчний гүйлгээг харах.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth жетон болон үйлчлүүлэгчдийг үзэх.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth жетон болон үйлчлүүлэгчдийг удирдах.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Аюулгүй байдлын тохиргоог удирдах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Хамтрагчдыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Хамтрагчдыг харах.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Хэвлэх загваруудыг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Хэвлэх загваруудыг үзэх.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Шүүмжийг удирдах.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Шүүмж харах.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Мөнгө олох мэдээллийг харах.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Мөнгө олох мэдээллийг удирдах.',



    'profile' => 'Нэр, имэйл хаяг, зураг, баталгаажуулалтын статус зэрэг профайлын мэдээллийг уншина уу.',
    'phone' => 'Холбоо барих дугаар руу нэвтрэх',
    'address' => 'Хадгалсан хаягийн дэвтэрээс хаягийг уншиж, засварлана уу',
    'buy' => 'Захиалга & Дэлгүүрийн захиалга.',
    'order-history' => 'Захиалгын түүхийг уншина уу.',
    'my-gift-cards' => 'Миний бэлгийн картуудад хандах.',
    'articles' => 'Нийтлэлийг засах.',
    'notifications' => 'Мэдэгдэл илгээх, хүлээн авах.',
    'read-shops' => 'Дэлгүүрийн жагсаалтыг уншина уу.',
    'shop-edit' => 'Дэлгүүрийн засварлах эрх.',
    'shop-contacts' => 'Холбоо барих маягтыг хүлээн авах, засварлах.',
    'shop-gift-cards' => 'Карт үүсгэх, засварлах, удирдах.',
    'shop-faqs' => 'Байнга асуудаг асуултуудыг үүсгэх, засах, удирдах боломжтой.',
    'shop-categories' => 'Ангилал үүсгэх, засварлах, удирдах.',
    'backoffice-write-products' => 'Арын албанд бүтээгдэхүүн үүсгэх, засварлах, удирдах эрхийг олгох.',
    'backoffice-read-products' => 'Бүтээгдэхүүний жагсаалт болон бүтээгдэхүүний дэлгэрэнгүй мэдээллийг арын албанд үзэх эрх олгох.',
    'shop-read-reports' => 'Мэдээлэл, тайланг уншина уу.',
    'shop-socials' => 'Дэлгүүрийн нийгмийн сүлжээг засах.',
    'shop-accounts' => 'Дэлгүүртэй холбоотой санхүүгийн дансуудыг засах, устгах.',
    'shop-menus' => 'Дэлгүүрийн цэсийг засах.',
    'shop-pages' => 'Дэлгүүрийн хуудсыг засах.',
    'shop-warehouse' => 'Дэлгүүрийн агуулахыг засварлах',
    'shop-permissions' => 'Дэлгүүрийн хандалтыг харах, засах.',
    'shop-process-center' => 'Хүлээн авсан захиалгыг удирдах.',
    'shop-profile' => 'Дэлгүүрийн профайлыг удирдах.',
    'shop-discount-code' => 'Хөнгөлөлтийн кодыг удирдах.',
    'shop-coupon' => 'Купоныг удирдах.',
    'shop-offer' => 'Саналуудыг удирдах.',
    'shop-cashback' => 'Бэлэн мөнгө буцааж авах.',
    'shop-lottery' => 'Сугалаа удирдах.',
    'shop-community' => 'Нийгэмлэгийг удирдах.',
    'shop-customers' => 'Харилцагчдыг удирдах.',
    'shop-ribbon' => 'Ribbon захиалгыг удирдах.',
    'community-read' => 'Selldone нийгэмлэгийг уншина уу.',
    'community-write' => 'Худалдсан нийгэмлэг гэж бичээрэй.',
    'profile-write' => 'Хэрэглэгчийн профайлын мэдээллийг бичнэ үү.',
    'vendor-read' => 'Борлуулагчийн захиалгыг биелүүлэх үйлдлүүд рүү нэвтрэх.',
    'vendor-write' => 'Худалдагчийн захиалга, төлбөр болон бусад мэдээллийг өөрчлөх.',
    'connect-providers' => 'Холбогчийг нэмэх, унших, бичих.',
    'personal-identification' => 'Хувийн мэдээлэл, хандалт, бүртгэлийн тохиргоог уншина уу.',
    'accounts' => 'Түрийвч рүү нэвтрэх, гүйлгээ унших, түүхийг цэнэглэх.',
    'shop-add' => 'Шинэ дэлгүүр нэмэх.',
    'shop-delete' => 'Дэлгүүр устгах.',
    'shop-ai-write' => 'Хэрэглэгчид AI командыг гүйцэтгэх боломжийг олгоно.',
    'shop-ai-read' => 'Хэрэглэгчид тушаал гүйцэтгэхгүйгээр хиймэл оюун ухааны мэдээлэлд хандах боломжийг олгоно.',
    'vendor-payment' => 'Хэрэглэгч нь борлуулагчдын төлбөрийн бүртгэлийг нэмэх эсвэл Stripe Connect зэрэг холбогдсон дансаараа дамжуулан мөнгө шилжүүлэх боломжийг олгоно.',
    'company-read' => 'Бизнесийн профайлын мэдээллийг унших боломжийг олгоно.',
    'company-write' => 'Бизнесийн профайлын мэдээллийг унших, бичих боломжийг олгоно.',
    'agency-read' => 'Агентлагийн мэдээллийг унших боломжтой.',
    'agency-write' => 'Агентлагийн мэдээллийг унших, бичих боломжийг олгодог.',
    'note-read' => 'Дэлгүүрийн тэмдэглэл уншихыг зөвшөөрдөг.',
    'note-write' => 'Дэлгүүрийн тэмдэглэл унших, бичих боломжийг олгоно.',
    'developer-read' => 'Хөгжүүлэгчийн хөрөнгийг уншихыг зөвшөөрдөг.',
    'developer-write' => 'Хөгжүүлэгчийн хөрөнгийг унших, бичих боломжийг олгодог.',
    'tokens-read' => 'Oauth жетон болон үйлчлүүлэгчдийг уншина уу.',
    'tokens-write' => 'Oauth жетон болон үйлчлүүлэгчээ бичнэ үү.',
];
