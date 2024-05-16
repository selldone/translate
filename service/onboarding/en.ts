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
  categories: {
    Baby: {
      title: "Baby Supplies",
      desc: "Feeding, Maternity, Stroller",
    },

    Beauty: {
      title: "Beauty",
      desc: "Cosmetic, Fragrance, Hair Care",
    },
    Blog: {
      title: "Blog",
      desc: "Sports blog, Science blog, Technology blog",
    },
    Fashion: {
      title: "Fashion",
      desc: "Clothing, Shoes, Watch",
    },
    Crypto: {
      title: "Crypto",
      desc: "Crypto-Currency, Blockchain, NFT",
    },
    Electronics: {
      title: "Electronics",
      desc: "Mobile, Video Game, Laptop, TV",
    },
    Food: {
      title: "Food & Drink",
      desc: "Restaurants, Bakery, Beverage",
    },
    Furniture: {
      title: "Furniture",
      desc: "Home Furniture, Decor, Luggage & Travel",
    },
    Gift: {
      title: "Gift Card",
      desc: "App Store, Google Play, Netflix, Spotify",
    },
    Groceries: {
      title: "Groceries",
      desc: "Dairy, Fruit, Prepared Food, Meat",
    },
    Handcrafts: {
      title: "Handcrafts",
      desc: "Collectible, Painted Shoes, Sculptures, Glass Art",
    },
    Health: {
      title: "Health",
      desc: "Pharmacy, Pet care, Wellness",
    },
    Home: {
      title: "Home & Living",
      desc: "Kitchen Appliances, Cookware, Dining",
    },
    Jewelry: {
      title: "Jewelry",
      desc: "Necklace, Ring, Bracelet",
    },
    Sports: {
      title: "Sports",
      desc: "Exercise, Camping, Bikes, Recreation",
    },
    Education: {
      title: "Online Courses",
      desc: "Web Development, Design, Business",
    },
    Toy: {
      title: "Toy",
      desc: "Game, Puzzle, Action Figures",
    },
    Other: {
      title: "Other",
      desc: "Other occupations...",
    },
  },

  partners: {
    title: "{name} is partnering with Selldone",
    subtitle: "in unlocking the next-generation of online businesses.",
    subtitle_official: "Unlock the next-generation of online businesses.",

    create_new_shop: "Create a new shop",
    select_a_shop: "Select a shop",
    apply_deal_to: "Apply deal to {shop}",
    notifications: {
      success_apply: "Deal successfully activated!",
    },
  },

  name: "Setup",
  overview: {
    title: "Overview",
    subtitle:
      "Gain insight into the Business OS and discover how it can help your business.",
  },

  shop: {
    title: "Zero to Revenue",
    subtitle: "Go to the next level by following these straightforward steps.",
  },

  open_website: "Open my website",

  customize_theme: "Customize Website",
  setup_business: "Setup Business",
  add_product: "Add Products",
  setup_shipping: "Setup Shipping",
  add_domain: "Add Domain",
  add_payment: "Connect Payment",

  product: {
    step1: {
      title: "Option 1. Add manually",
      msg: "You can add physical products, virtual items, files, and services to your store and start selling them.",
      action_on: "Add your first product",
      action_off: "Add more products",
      category:
        "Categories are the masterpiece of your online shopping website compared to others. Make everything categirized and arranged by adding categories and managing with drag & drop.",
      add_category: "Add category",
    },
    step2: {
      title: "Option 2. Add by Excel",
      msg: "Have many products, like 1K, 10K items? Don't worry import all just by one action.",
      import_excel: "Import by Excel",
      download_template: "Download template",
    },
  },
  shipping: {
    step1: {
      title: "Step 1. Set location",
      msg: "At the first step, set your warehouse (origin of shipping). This information is used to calculate the distance, shipping cost, and check to be in the shipping service area.",
      edit_warehouse: "Edit warehouse",
      add_warehouse: "Add your warehouse",
    },
    step2: {
      title: "Step 2. Activate shipping methods",
      msg: "Add at least one shipping method to your store. You can set pricing based on weight, distance, and other parameters. Don't forget to set limits for distance, weight, and size of packages that each shipping service supports.",
      add_delivery: "Add shipping methods",
    },
  },

  domain: {
    step1: {
      title: "Step 1. Buy a domain",
      msg: "If you do not have your personal domain yet, it's time to buy your own domain from websites like namecheap.com .",
    },
    step2: {
      title: "Step 2. Enable SSL",
      msg: "If you use services like Namecheap that provides CDN and SSL, you just need to activate 1.CDN and 2.SSL on your domain.",
    },
    step3: {
      title: "Step 3. Set DNS records",
      msg: "Congratulations, Now all you have to do is configure DNS in your domain service provider and add the domain to your account.",
    },
  },

  payment: {
    step1: {
      title: "Pricing currencies",
      msg: "You can accept money in different currencies, and your shop can support more than one currency for pricing. By the way, if you set your store currency to USD, customers can pay in any currencies like USD, EUR, GBP, etc., to buy from you.",
      manage_currencies: "Manage pricing currencies",
    },
    step2: {
      title: "Accept money",
      msg: "Add cash on delivery, direct money transfer, and other available payment methods in your shop.",
      online_title: "Online payment methods",
      online_msg:
        "Accept payment by cards, new banking applications, buy-now-pay-later, and many other online payment methods.",
      add_online_gateway: "Add an online payment method",
      cod_title: "Cash on delivery payment method",
      cod_msg:
        "Accept payment after delivery of orders. You can confirm cash on delivery payments manually.",
      cash_title: "Cash payment methods",
      cash_msg: "This type of payment is used in Selldone® POS.",
      dir_title: "Direct payment methods",
      dir_msg:
        "You can accept payment by direct money transfer, bank money transfer, and other traditional ways.",
    },
    step3: {
      msg: "Connect Selldone to your Stripe account with just one click in 30 seconds. Currently, we are supporting the auto configuration process by Stripe. Go to your gateway tab, add Stripe, and click the '<b>Auto connect to Stripe</b>' button.",
      my_gateways: "My payment gateways",
    },
  },

  intro_inline_help_message:
    "Look for this red help button. It helps you to practise yourself from zero to expert in your Business OS.",

  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    template: {
      title: "Templates",
      msg: "Kickstart your shop with our pre-built templates! Easily diversify by adding multiple pages, each boasting its own unique design.",
      action:'View all templates...'

    },

    colors: {
      title: "Colors & Layout",

      msg: "Looking to tailor your product page and shop layout to better fit your vision? Dive into the theme customization section in your shop and watch the magic unfold effortlessly!",

      action:'Customize Colors & Theme'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "Business Model",
      msg: "Every business is unique, and often requires more than just a basic online store. Define your revenue model, and we will seamlessly handle the rest for you.",
    },
  },

  migration: {
    title: "Migration",
    shopify: {
      msg: "Switch to Selldone seamlessly from Shopify! Enjoy effortless migration, enhanced features, and cost-effective solutions for your online store.",
    },
    woocommerce: {
      msg: "Seamlessly migrate your WooCommerce products to Selldone in just a few clicks! Enjoy enhanced performance, intuitive design, and top-tier customer support. Upgrade your e-commerce experience now.",
    },
  },





};
