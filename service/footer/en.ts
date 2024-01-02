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
  /** @see SaminFooter **/
  footer: {
    title: "The #1 operating system for fast-growing companies",
    message:
      "Selldone, as an ecommerce platform, operates like an angel for the growth of businesses. Whether you have a brick-and-mortar store or a large company, you need to showcase your product on the internet. Selldone used to build online stores with lower operating costs and greater flexibility. In addition, we provide an always-improving ecommerce management toolchain that gains new features every week, like integrating store administration and visual programming interface to create custom automation processes or AI integration.",

    contact_us: "Contact us",
    about_us: "About Selldone",

    menu: [
      {
        title: "Selldone",
        items: [
          { title: "What is Selldone?", to: { name: "WhatIsSelldone" } },
          { title: "Selldone Community", to: { name: "CommunityHomePage" } },
          { title: "🎁 Community Gifts", to: { name: "ParticipantPage" } },

          { title: "Help", to: { name: "Helps" } },
          { title: "Blog", to: { name: "Blogs" } },

          { title: "Privacy Policy", to: { name: "Landing_Privacy" } },
          { title: "Terms of Service", to: { name: "Landing_Terms" } },

        ],
      },
      {
        title: "Features",
        items: [
          { title: "Features & Benefits", to: { name: "Landing_Features" } },
          { title: "Staff & Scale", to: { name: "Landing_Staffs" } },
          { title: "Marketing Tools", to: { name: "Landing_Marketing" } },
          {
            title: "Processing Center",
            to: { name: "Landing_OrderProcessing" },
          },
          { title: "Incentives & Clubs", to: { name: "Landing_Incentives" } },
          { title: "Payment Solution", to: { name: "Landing_Auditing" } },
          { title: "Commerce AI", to: { name: "Landing_AI" } },
        ],
      },
      {
        title: "Solutions",
        items: [
          { title: "🎨 Art", to: { name: "Landing_NFT" } },
          { title: "🤝 Guild", to: { name: "GuildHome" } },
          { title: "🥑 Avocado", to: { name: "AvocadoHomePage" } },
          // { title: "Experts", to: { name: "ExpertsPage" } }, TODO: ACTIVATE AFTER RUNNING EXPERTS
          { title: "🧱 API / Developers", to: { name: "DocHome" } },

          { title: "SEO Engine", to: { name: "Landing_SEO" } },
          { title: "Smart Report", to: { name: "Landing_SmartReport" } },
          { title: "Cloud Hosting", to: { name: "Landing_Cloud" } },
        ],
      },
      {
        title: "Services",
        items: [
          { title: "Plans & Pricing", to: { name: "PriceList" } },
          { title: "Applications", to: { name: "AppStore_List" } },
          { title: "Application Builder", to: { name: "Landing_AppBuilder" } },
          { title: "Page Builder", to: { name: "Landing_PageBuilder" } },
          { title: "Automation & IoT", to: { name: "Landing_Automation" } },
          { title: "Community Platform", to: { name: "Landing_Community" } },
          { title: "Sales Handbooks", to: { name: "Handbooks" } },
        ],
      },
    ],
    copyright:
      "Experience Elegance. Uncover Innovation. Fuel Imagination. All rights reserved.",
  },

  admin_footer: {
    title: "Quick access menu:",
    boost_mode: "Boost",
    normal_mode: "Normal",
    boost_message: "Poor internet connection and need boost?",
    dark: "Dark",
    light: "Light",
    theme_message: "Activate smart invert",
    preferences: "Preferences",
    select_language: "Select your language",
    preferences_dialog: {
      title: "User preferences",
    },
    invite_link: "Share this unique link to invite new members",
  },

  admin_shop_footer: {
    title: "Quick access panel of {shop_name}",
  },
};
