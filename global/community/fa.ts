/*
 * Copyright (c) 2023. Selldone® Business OS™
 *
 * Author: M.Pajuhaan
 * Web: https://selldone.com
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 *
 * All rights reserved. In the weave of time, where traditions and innovations intermingle, this content was crafted.
 * From the essence of thought, through the corridors of creativity, each word, and sentiment has been molded.
 * Not just to exist, but to inspire. Like an artist's stroke or a sculptor's chisel, every nuance is deliberate.
 * Our journey is not just about reaching a destination, but about creating a masterpiece.
 * Tread carefully, for you're treading on dreams.
 */

export default {
  commons: {
    approved: "تایید شده",
    trend: "داغ",
    like: "لایک",
    share: "اشتراک گذاری",
    comment: "نظر",
    view_insight: "مشاهده آمار",
    trial_mode: "مدت استفاده رایگان",
    no_trial_mode: "بدون دوره رایگان",
    nofollow: "Nofollow",
    cross: "انشعاب",
    pin: "پین بالای صفحه",
    private: "اتاق خصوصی",
    text: "متن",
    voice: "صوت",
    video: "ویدئو",
    link: "لینک",
    image: "تصویر",

    product: "محصول",
    seo: "سئو",
    configuration: "تنظیمات",
    monetize: "کسب درآمد",
    subscription_fee: "هزینه اشتراک",
    login_msg: "برای به اشتراک گذاری نظراتتان وارد شوید.",
    topic: "موضوع",
    topic_title: "موضوع بحث",
    categories: "دسته بندی ها",
    author: "نویسنده",
    reply: "پاسخ",
    reports: "گزارش ها",
    show_more: "نمایش بیشتر..",
    disagree: "مخالف",
    agree: "موافق",
    suggestion_list: "پیشنهاد برای شما",
    following_action: "دنبال شده",
    follow_action: "دنبال کردن",
    rules_violation: "جامعه شما با شرایط نقض قوانین روبرو است!",
    cross_community: "کامیونیتی اشتراکی (کراس)",
    crossable: "قابل کراس",
    crossable_msg:
      "دیگر کامیونیتی ها قادر به باز انتشار تاپیک ها در جامعه های خود خواهند بود.",
    nofollow_msg: "افزودن تگ nofollow برای لینک ها.",
    topics: "موضوعات",
    posts: "پست ها",
    comments: "نظرات",
    total: "مجموع",
    user_reactions: "تعامل کاربران",
    impressions: "نمایش ها",
    reactions: "بازخوردها",
    saves: "ذخیره ها",
    embeds: "امبدها",
    shares: "اشتراک گذاری ها",
    you_are_admin: "شما مدیر هستید",
    you_are_moderator: "شما ناظر هستید",
    invite_friend: "دعوت از دوستان",
    nominate_friend: "تایید دوستان",
    request_nominate: "از دوستان خود بخواهید شما را تایید نمایند!",
    show_deleted_posts: "نمایش پست های حذف شده",

    moderators: "مدیران",
    analytics: "تجزیه و تحلیل",
    edit: "ویرایش",
    notify: "اعلان",
    rules: "قوانین",
    explore: "جدیدترین ها",
    my_feed: "من",
    blocked_message: "شما تا این زمان بلاک شده اید",


    reported: "گزارش شده",
    report: "گزارش تخلف",

    post: "مطلب",
    attach_file:'فایل پیوست',

  },

  invite_message:
    "{user} شما را به انجمن {community} دعوت کرده است. روی لینک زیر کلیک نمایید تا نظارت دوستان خود را خوانده و نظر خود را نیز با آن ها به اشتراک بگذارید. منتظر شما هستم.",

  /** @see TopicSubscriptionType */
  subscription_type: {
    MONTHLY: "ماهانه",
    SEASONAL: "فصلی",
    YEARLY: "سالانه",
    LIFETIME: "مادام العمر",
  },

  /** @see TopicTrialType */
  trial_type: {
    TRIO: "سه روز رایگان",
    WEEK: "یک هفته رایگان",
    MONTH: "یک ماه رایگان",
  },

  /** @see PostReaction */
  post_reaction: {
    LIKE: "دوست داشتن",
    SMILE: "خوشحال",
    CLAP: "تشویق",
    IDEA: "هوشمندانه",
    DISAGREE: "مخالفت",
  },

  /** @see PostAction */
  post_action: {
    comments: "کامنت ها",
    impressions: "ایمپرشن ها",
    saves: "ذخیره ها",
    shares: "اشتراک گذاری ها",
    embeds: "امبد ها",
    reports: "گزارش ها",
  },

  /** @see CBreadcrumb **/

  nominate: {
    note: "شما می توانید فردی که میشناسید را معرفی نمایید. در صورتی که این فرد قبلا توسط فردی دیگر تایید نشده باشد, شما به عنوان تایید کننده ایشان ثبت خواهید شد. دوست شما بایستی قبلا عضو سلدان شده باشد تا بتوانید ایشان را تایید نمایید.",
    no_credit_message:
      "متاسفانه اعتبار کافی برای تایید فرد دیگری ندارید, اما به زودی این اعتبار را دریافت خواهید کرد. لطفا در روزهای بعدی بررسی نمایید.",

    title: "دوستان خود را تایید نمایید",
    remains_credit: "اعتبار شما برای معرفی دوستان",
    user_nominate: "دوست خود را انتخاب نمایید",
    action: "تایید صلاحیت",
  },

  /** @see CommunityStageLevel */
  stage_level: {
    PUBLIC: "تمام کاربران",
    PRIVATE: "مدیران",
    VERIFIED: "کاربران تایید شده",
  },

  /** @see CommunityWidget */
  widget: {
    offensive_message: "این نظر توهین آمیز است!",
    topic: "موضوع",
  },

  /** @see CommunityPostEditor */
  editor: {
    title_title: "عنوان موضوع",
    topic_desc: "شرح مبحث",
    send_post: "ارسال پست",
    no_link: "بدون پیوند",
    add_link: "افزودن پیوند",
    add_video: "افزودن ویدیو",
    add_image: "افزودن تصویر",
    no_subscription: "بدون برنامه درآمدزایی",
    nofollow_msg: "nofollow را به همه پیوندها اضافه کنید",
    cross_msg: "می تواند از این مبحث متقابل ایجاد کند",
    pin_msg: "این مبحث را به بالای عناوین دسته بندی پین کنید",
    private_on_msg: "فقط سرپرست و ناظران می توانند این مبحث را مشاهده کنند",
    private_off_msg: "هر کس می تواند این موضوع را ببیند",
    topic_placeholder: "عنوان موضوع شگفت انگیز اینجا ...",
    desc_placeholder: "توضیح مختصر در مورد موضوع ...",
    title_placeholder: "سوال یا موضوع چیست؟",
    body_placeholder: "ارسال یک پست جدید ...",
    remove_poll: "حذف نظرسنجی",
    take_screenshot: "Take as cover",
    take_link_msg: "پیوند گذشته را اینجا وارد کنید",
    eligible_title: "مراحل لازم برای ارسال",
    public:'عمومی',

  },
  tips: {
    verify_email: "ایمیل خود را ثبت و تایید نمایید.",
    verify_phone: "شماره تماس خود را تایید نمایید.",
    need_nominate: "توسط یک نفر به معرفی و تایید شوید.",
  },

  regime: {
    Aristocracy: "اریستوکراسی",
    Timocracy: "تیموکراسی",
    Oligarchy: "اولیگارشی",
    Democracy: "دموکراتیک",
    Tyranny: "استبداد",
  },

  /** @see CommunityComments */
  comment: {
    comment_plc: "ارسال نظر...",
    comment_response_plc: "ارسال پاسخ به {name}...",
    first_comment: "اولین نظر را شما ثبت نمایید...",
  },

  /** @see CommunityFilter */
  filter: {
    created_at: "جدیدترین ها",
    created_at_asc: "اولین ها",
    positive_reactions: "بیشترین پسندها",
    engaged: "بیشترین تعامل",
    all_posts: "پست ها",
    media_only: "فقط مدیا",
  },

  /** @see CommunityCategoryPage */
  /** @see CommunityTopicPage **/

  topic: {
    add_topic: "ایجاد تاپیک جدید",
    add_topic_desc:
      "ابتدا در مورد موضوع خود جستجو کنید! به هیچ وجه مباحث تکراری ایجاد نکنید ، زیرا توسط مدیران حذف می شوند.",
    can_create: "قابل ساخت توسط",
    add_cross: "افزودن تاپیک اشتراکی",
    add_cross_desc:
      "می توانید موضوعات های مشترکی با انجمن های دیگر ایجاد کنید. برای انجام این کار ، باید کد cross-community را کپی کنید.",
    admins_moderators: "مدیرها و ناظران",
    remove_msg: "درصورتی که این تاپیک را حذف نمایید قادر به بازگرداندن آن نخواهید بود!",
    remove: "حذف تاپیک",
    main_post_removed_msg: "پست اصلی این تاپیک توسط نویسنده حذف شده است!",
    delete_dialog: {
      title: "حذف تاپیک",
      message: "آیا از حذف این تاپیک مطمعن هستید؟",
      actions: "بله، پاک شود",
    },
    statistics: "آمار موضوع (تاپیک)",
  },

  community: {
    disabled: "کامیونیتی شما غیر فعال است!",
    community_url: "رفتن به صفحه کامیونیتی",
    edit: "ویرایش کامیونیتی",
    install: "نصب کامیونیتی",
    start_community_message:
      "جامعه ای فوق العاده برای کاربران و کسب و کارتان ایجاد نمایید.",
    shop_community_setting: "تنظیمات کامیونیتی",
    regime: "رژیم جامعه",
    need_verify_to_create_message:
      "برای آنکه جامعه خود را کاملا رایگان شروع کنید، مراحل زیر را بایستی طی نمایید",
    name: "نام کامیونیتی",
    name_plc: "my-community-name...",
    name_msg: "یک نام اختصاصی برای کامونیتی خود وارد نمایید",
    title: "عنوان",
    title_plc: "یک عنوان فوقالعاده برای کامیونیتی...",
    title_msg: "یک نام کوتاه و متناسب برای جامعه خود انتخاب نمایید",
    desc: "توضیح مختصر",
    desc_plc: "در این جامعه ما به دنبال...",
    desc_msg:
      "یک توضیح مختصر درباره این کامیونیتی، اهداف و چشم انداز آن بنویسید",
    enable_msg: "شما می توانید کامیونیتی خود را فعال یا غیر فعال نمایید.",
    hide_rule: "مخفی کردن قوانین",
    edit_rule: "ویرایش قوانین",
    rule_plc: "قوانین جامعه خود را بنویسید...",
    statistics: "آمار کامیونیتی",
  },

  /** @see CommunityAccessController **/

  access: {
    admins: "مدیر ها",
    moderators: "ناظر ها",
    manage_admins: "تنظیم مدیر ها",
    manage_moderators: "تنظیم ناظران",
    add_moderator: "افزودن ناظر",
  },

  /** @see CommunityHomePage **/
  /** @see CommunityCategoryStatistic **/

  category: {
    add_new: "ایجاد دسته جدید",
    add_new_msg:
      "در کل می توانید 20 دسته ایجاد کنید. این برای دسترسی راحت تر و دسترسی بیشتر به جامعه شما کافی است.",
    title: "عنوان",
    title_plc: "یک عنوان فوق العاده...",
    title_msg: "برای دسته بندی یک نام جامع و متناسب انتخاب نمایید",
    desc: "توضیحات",
    desc_plc: "درباره این دسته...",
    desc_msg: "توضیح مختصر درباره این دسته وارد نمایید",
    restrict: "حالت محدود شده",
    restrict_msg:
      "آیا می خواهید تنها مدیران قادر به ایجاد تاپیک جدید در این دسته باشند؟",
    statistics: "آمار دسته بندی",
    remove_msg: "درصورتی که این دسته بندی را حذف نمایید قادر به بازگرداندن آن نخواهید بود!",
    delete_dialog: {
      title: "حذف دسته بندی",
      message: "آیا از حذف این دسته بندی و تمام تاپیک های داخل آن مطمعن هستید؟",
      actions: "بله، پاک شود",
    },
  },

  /** @see CBreadcrumb **/
  invite: {
    not_have_profile_error: "این کاربر پروفایل خود را تکمیل ننموده است!",
    nominated_before_error: "این کاربر قبلا معرفی و تایید شده است!",
    verified_before_error: "این پروفایل توسط سلدان تایید شده است!",
    send_invite_msg: "این پیام را برای دوستان خود ارسال نمایید",
  },

  /** @see CommunityPostActionsMenu **/
  post_actions: {
    save: "ذخیره",
    save_msg: "برای خواندن در آینده",
    copy_code: "کپی کد",
    copy_link: "کپی لینک",
    copy_link_msg: "لینک مستقیم به این پست",
    embed: "کد iframe / html این پست",
    embed_msg: "این کد را در صفحه وب خود قرار دهید",

    edit: "ویرایش پست",
    edit_msg: "محتوای متنی پست را ویرایش نمایید",

    report_msg: "آیا این محتوای پست نامناسب است؟",
    delete: "حذف پست",
    delete_msg: "این پست را حذف نمایید",
    approved: "تایید پاسخ",
    approve_action: "علامت گذاری به عنوان پاسخ تایید شده",
    approved_msg:"نشانگذاری به عنوان پاسخ تایید شده",

    delete_dialog: {
      title: "حذف پست",
      message: "آیا از حذف این پست اطمینان دارید؟",
      action: "بله، حذف شود",
    },
  },

  /** @see CommunityCommentActionsMenu **/
  comment_actions: {
    edit: "ویرایش نظر",
    link: "لینک به نظر",
    link_msg: "کپی کردن لینک به این کامنت",
    edit_msg: "ویرایش محتوای کامنت",
    delete: "حذف",
    delete_msg: "حذف این نظر",

    delete_dialog: {
      title: "حذف نظر",
      message: "آیا از حذف این نظر اطمینان دارید؟",
      action: "بله، حذف شود",
    },
  },

  embed: {
    copy_code_msg: "این کد را در صفحه html خود قرار دهید.",
    copy_code: "کپی کد",
  },
};
