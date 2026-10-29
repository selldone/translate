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

export default  {
  commons: {
    approved: "Approved",
    trend: "Trend",
    like: "Like",
    share: "Share",
    comment: "Comment",
    view_insight: "View insights",
    trial_mode: "Trial mode",
    no_trial_mode: "No free period",
    nofollow: "Nofollow",
    cross: "Cross",
    pin: "Pin to top",
    private: "Private room",
    text: "Text",
    voice: "Voice",
    video: "Video",
    link: "Link",
    image: "Image",

    product: "Product",
    seo: "SEO",
    configuration: "Configuration",
    monetize: "Monetize",
    subscription_fee: "Subscription fee",
    login_msg: "Start your community journey",
    topic: "Topic",
    topic_title: "Topic title",
    categories: "Categories",
    author: "Author",
    reply: "Reply",
    reports: "report(s)",
    show_more: "Show more..",
    disagree: "Disagree",
    agree: "Agree",
    suggestion_list: "Suggestion for you",
    following_action: "Following",
    follow_action: "Follow",
    rules_violation: "Your community face with rules violation circumstance!",
    cross_community: "Cross community",
    crossable: "Cross able",
    crossable_msg:
      "Other communities can create cross topics by tour community",
    nofollow_msg: "Add nofollow tag for all links",
    topics: "Topics",
    posts: "Posts",
    comments: "Comments",
    total: "Total",
    user_reactions: "Users reactions",
    impressions: "Impressions",
    reactions: "Reactions",
    saves: "Saves",
    embeds: "Embeds",
    shares: "Shares",
    you_are_admin: "You are an admin",
    you_are_moderator: "You are a moderator",
    invite_friend: "Invite my friend",
    nominate_friend: "Nominate my friend",
    request_nominate: "Request someone to nominate you!",
    show_deleted_posts: "Show deleted posts",

    moderators: "Moderators",
    analytics: "Analytics",
    edit: "Edit",
    notify: "Notify",
    rules: "Rules",
    explore: "Explore",
    my_feed: "Me",
    blocked_message: "You are blocked till",

    reported: "Reported",
    report: "Report",
    post: "Post",

    attach_file:'Attach file',

  },

  invite_message:
    "{user} has invited you to the forum {community}. Click on the link below to read your friends' observations and share your opinion with them. I'm waiting for you.",

  /** @see TopicSubscriptionType */
  subscription_type: {
    MONTHLY: "Monthly",
    SEASONAL: "Seasonal",
    YEARLY: "Yearly",
    LIFETIME: "Lifetime",
  },

  /** @see TopicTrialType */
  trial_type: {
    TRIO: "3 days free",
    WEEK: "One week free",
    MONTH: "One month free",
  },

  /** @see PostReaction */
  post_reaction: {
    LIKE: "Love",
    SMILE: "Happy",
    CLAP: "Claps",
    IDEA: "Idea",
    DISAGREE: "Disagree",
  },

  /** @see PostAction */
  post_action: {
    comments: "Comments",
    impressions: "Impressions",
    saves: "Saves",
    shares: "Shares",
    embeds: "Embeds",
    reports: "Reports",
  },

  /** @see CBreadcrumb **/

  nominate: {
    note: "You can nominate someone you know. If this person has not already been approved by another person, you will be registered as their verifier. Your friend must be a member of Selldone before you can nominate them.",
    no_credit_message:
      "Unfortunately, you do not have enough credit to approve someone else, but you will receive this credit soon. Please check in the next few days.",

    title: "Nominate your friend",
    remains_credit: "Your credit to nominate others",
    user_nominate: "Select your friend",
    action: "Nominate",
  },

  /** @see PostAction */
  stage_level: {
    PUBLIC: "All users",
    PRIVATE: "Only moderators",
    VERIFIED: "All verified users",
  },

  /** @see CommunityWidget */
  widget: {
    offensive_message: "This comment is offensive!",
    topic: "Topic",
  },

  /** @see CommunityPostEditor */
  editor: {
    topic_title: "Topic title",
    topic_desc: "Topic description",
    send_post: "Send post",
    no_link: "No link",
    add_link: "Add link",
    add_video: "Add video",
    add_image: "Add image",
    no_subscription: "No monetization plan",
    nofollow_msg: "Add nofollow to all links",
    cross_msg: "Can create cross topic from this topic",
    pin_msg: "Pin this topic to top of topics in category",
    private_on_msg: "Only admin & moderators can see this topic",
    private_off_msg: "Anyone can see this topic",
    topic_placeholder: "Amazing topic title here...",
    desc_placeholder: "Short description about the topic...",
    title_placeholder: "Whats your question, topic or ...?",
    body_placeholder: "Write a new post...",
    remove_poll: "Remove poll",
    take_screenshot: "Take as cover",
    take_link_msg: "Past link here and enter",
    eligible_title: "Steps to be eligible",
    public:'Public',

  },
  tips: {
    verify_email: "Enter and verify your email.",
    verify_phone: "Verify your phone.",
    need_nominate: "Complete your KYC in the Dashboard > Identity > KYC.",
  },

  regime: {
    Aristocracy: "Aristocracy",
    Timocracy: "Timocracy",
    Oligarchy: "Oligarchy",
    Democracy: "Democracy",
    Tyranny: "Tyranny",
  },

  /** @see CommunityComments */
  comment: {
    comment_plc: "Add a comment...",
    comment_response_plc: "Response to {name}...",
    first_comment: "Place first comment...",
  },

  /** @see CommunityFilter */
  filter: {
    created_at: "Most recent",
    created_at_asc: "Pioneers",
    positive_reactions: "Most liked",
    engaged: "Most engaged",
    all_posts: "All posts",
    media_only: "Media only",
  },

  /** @see CommunityCategoryPage */
  /** @see CommunityTopicPage **/
  /** @see CommunityCategoryStatistic **/

  topic: {
    add_topic: "Add new topic",
    add_topic_desc:
      "First search about your topic! Do not create duplicate topics at all, because they will be removed by the moderators.",
    can_create: "Can create by",
    add_cross: "Add cross topic",
    add_cross_desc:
      "You can create common threads with other communities. To do this, you need to copy the cross-community code.",
    admins_moderators: "Admins & Moderators",
    remove_msg: "If you remove this topic, it's an irreversible action!",
    remove: "Remove topic",
    main_post_removed_msg: "Main post has been removed by author or admin!",
    delete_dialog: {
      title: "Remove topic",
      message: "Are you sure delete this topic?",
      actions: "Yes, delete now",
    },
    statistics: "Category Statistics",
  },

  /** @see CommunityStatisticView **/

  community: {
    disabled: "Your community disabled!",
    community_url: "Open community page",
    edit: "Edit community",
    install: "Install now",
    start_community_message: "Start your amazing community.",
    shop_community_setting: "Community configs",
    regime: "Community regime",
    need_verify_to_create_message:
      "To create your great community entirely free, pass these steps",
    name: "Name",
    name_plc: "my-community-name...",
    name_msg: "Set a unique user name for your community",
    title: "Title",
    title_plc: "Some amazing community title...",
    title_msg: "Set a specific and comprehensive title for community",
    desc: "Description",
    desc_plc: "About this community...",
    desc_msg: "A short description about this community",
    enable_msg: "You can enable or disable your community",
    hide_rule: "Hide rule",
    edit_rule: "Edit rule",
    rule_plc: "Write your community rules...",
    statistics: "Community Statistics",
    modern: {
      crm: "CRM",
      page_subtitle: "Manage your community, access and activity.",
      all_time: "All time",
      create_action: "Create community",
      settings_title: "Community settings",
      dominant_regime: "Dominant regime",
      regime_description: "Derived from settings and community activity.",
      regime_help: "Calculated from settings and moderator/customer activity. This is an indicator, not an editable mode.",
      create_title: "Bring your customers together",
      create_description: "Create a space for questions, ideas and conversations around your brand.",
      activity: "Community activity",
      selected_period: "Selected period",
      reaction_breakdown: "Reaction breakdown",
      content_types: "Content types",
      daily_trends: "Daily trends",
      count_per_day: "Count / day",
      reports: "Reports",
      analytics_error: "Could not load community activity.",
      retry: "Retry",
      analytics_unavailable: "Community activity is not available yet.",
      period_help: "Activity counts apply to the selected date range. Lifetime totals above are independent of this range.",
      identity: "Identity",
      identity_help: "Set the name and description customers see in your community.",
      logo_help: "Upload or edit your community logo.",
      seo_help: "Set the default link behavior. Categories and topics may have their own SEO settings.",
      follow_links: "Follow links",
      nofollow_links: "No follow links",
      cross_help: "Allow other communities to embed your topics.",
      topic_creation: "Topic creation",
      topic_help: "Controls who can create topics. Other members can still post in existing topics.",
      topic_audience: "Who can create topics?",
      availability: "Community availability",
      attachments: "Attachments",
      attachments_help: "Up to 3 files per post, 8 MB per file.",
      attachment_audience: "Who can attach files?",
      allowed_types: "Allowed file types",
      allowed_types_help: "Leave empty to allow all file types.",
      allowed_types_placeholder: "Enter an extension and press Enter, e.g. zip",
      rules_help: "Set clear expectations for community participation.",
      unlock_name: "Unlock community name",
      lock_name: "Lock community name",
      topic_public: "All registered users can create topics.",
      audience_public: "All registered users",
      audience_private: "Admins and moderators",
      audience_verified: "Verified or nominated users",
      topic_private: "Only admins and moderators can create topics.",
      topic_verified: "Admins, moderators, and verified or nominated users can create topics.",
      attachment_public: "All registered users can attach files.",
      attachment_private: "Only admins and moderators can attach files.",
      attachment_verified: "Admins, moderators, and verified or nominated users can attach files.",
    },
  },
  /** @see CommunityAccessController **/

  access: {
    admins: "Admins",
    moderators: "Moderators",
    manage_admins: "Manage admins",
    manage_moderators: "Manage moderators",
    add_moderator: "Add moderator",
    modern: {
      admin_description: "Shop owner and staff with Community write access.",
      admin_help_title: "About admin access",
      admin_help:
        "Community admins are the shop owner and staff with Community write access. Their dashboard access follows their assigned staff permissions, rather than covering every shop section.\n\nThey manage community settings, categories, topics, content and moderators, including topic settings and topic deletion/restoration.\n\nEditing post or comment text remains limited to its author. Manage staff permissions in Shop → Access.",
      moderator_description: "Public community moderation. No shop dashboard access.",
      moderator_help_title: "About moderator access",
      moderator_help:
        "Moderators work on the public community page. They can create topics, including in restricted categories, and choose pinning, visibility and posting/comment locks when creating them.\n\nThey can review reports, remove inappropriate posts or comments, and mark replies as approved. They can edit only their own post/comment text. Ask a community admin to update an existing topic's settings.\n\nThis role does not grant shop dashboard access or permission to manage community settings, categories or moderators, or delete whole topics.",
      add_title: "Add moderator",
      add_help: "Choose an existing Selldone user by their registered email.",
      email: "Registered user email",
      list_title: "Moderators",
      remove: "Remove moderator",
      added: "A new moderator has been added successfully.",
      removed: "The moderator has been removed successfully.",
      load_more: "Load more",
    },
  },

  /** @see CommunityHomePage **/
  category: {
    add_new: "Add new category",
    add_new_msg:
      "You can create total of 20 categories. It's more than enough, to keep your community access convenient and more reachable.",
    title: "Title",
    title_plc: "Some amazing category...",
    title_msg: "Set a specific and comprehensive title for category",
    desc: "Description",
    desc_plc: "About this category...",
    desc_msg: "A short description about this category",
    restrict: "Restrict mode",
    restrict_msg: "Only moderators can create topic?",
    statistics: "Category statistics",
    remove_msg: "If you remove this category, it's an irreversible action!",
    delete_dialog: {
      title: "Remove category",
      message: "Are you sure delete this category?",
      actions: "Yes, delete now",
    },

  },

  /** @see CBreadcrumb **/
  invite: {
    not_have_profile_error: "This user not complete his/her profile!",
    nominated_before_error: "This user nominated before!",
    verified_before_error:
      "This profile verified by Selldone global community before!",
    send_invite_msg: "Send this message to your friends",
  },

  /** @see CommunityPostActionsMenu **/
  post_actions: {
    save: "Save",
    save_msg: "Save for later",
    copy_code: "Copy code",
    copy_link: "Copy link",
    copy_link_msg: "Direct link to the post",
    embed: "Embed this post",
    embed_msg: "Copy & past embed html",

    edit: "Edit post",
    edit_msg: "Change the post content",

    report_msg: "Is this post inappropriate?",
    delete: "Delete post",
    delete_msg: "Remove this post",
    approved: "Approved post",
    approve_action: "Mark as accepted",
    approved_msg:"Set this post as approved answer",


    delete_dialog: {
      title: "Delete post",
      message: "Are you sure delete this post?",
      action: "Yes, delete now",
    },
  },

  /** @see CommunityCommentActionsMenu **/
  comment_actions: {
    edit: "Edit comment",
    link: "Link to comment",
    link_msg: "Copy link to share the comment",
    edit_msg: "Change your comment content",
    delete: "Delete",
    delete_msg: "Delete this comment",

    delete_dialog: {
      title: "Delete comment",
      message: "Are you sure delete this comment?",
      action: "Yes, delete now",
    },
  },

  embed: {
    copy_code_msg: "Copy past the code",
    copy_code: "Copy code",
  },
};
