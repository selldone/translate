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
  modern: {
    eyebrow: "Store setup",
    title: "A clear path to your first sale",
    subtitle: "Set up the essentials. Return to any step whenever you need.",
    setup_guide: "Setup guide",
    progress: "Setup progress",
    next: "Next up: {step}",
    complete: "Your store essentials are ready.",
    to_do: "To do",
    step_customize: "Customize website",
    step_business: "Business model",
    step_products: "Add products",
    step_shipping: "Shipping",
    step_domain: "Add domain",
    step_payments: "Connect payments",
    overview: "Overview & learning",
    overview_description:
      "Your store essentials and setup resources, together in one place.",
    store_address: "Store address",
    shop_info: "Shop information",
    shop_info_description: "Identity, contact details and basic settings.",
    shop_settings: "Shop settings",
    handbook: "Selldone handbook",
    handbook_description:
      "A practical guide to launching your store and making your first sale.",
    video_library: "Video library",
    guide_0:
      "Preview a template, then adjust your brand colors and storefront appearance.",
    guide_1: "Choose how your store receives orders and fulfills them.",
    guide_2:
      "Add your products and categories, or import an existing product sheet.",
    guide_3:
      "Set a dispatch location and configure the delivery methods you offer.",
    guide_4: "Connect your domain and complete its DNS verification.",
    guide_5: "Choose your currencies and connect an online payment gateway.",
    saved_progress: "Your setup progress follows your store settings.",
    back_dashboard: "Back to dashboard",
    business: {
      description:
        "A clear view of how your store receives orders, handles payments and delivers to customers.",
      current_model: "Current business model",
      change_model: "Change model",
      manage_model: "Manage business model",
      review_note: "Review a model before changing your setup.",
    },
    payment: {
      description:
        "Choose your currencies and connect the payment methods your customers use.",
      manage_gateways: "Manage gateways",
      currencies_description: "Choose the currencies used for product prices. Payment options depend on each currency and gateway.",
      online_description: "Connect the online payment providers available for your store.",
      setup_note: "Only an online gateway completes the payment setup step.",
      other_title: "Other payment methods",
      other_description: "Cash on delivery, cash and direct payment.",
      additional_gateways: "+{count} more gateways",
    },
    domain: {
      description: "Connect a domain you own, then verify its DNS settings.",
      manage_domains: "Manage domains",
      dns_title: "Verify DNS records",
      dns_description:
        "Update the DNS records at your domain provider, then complete the domain connection in Selldone.",
      purchase_note:
        "Need a domain? Buy one from a domain registrar, then connect it here.",
    },
    products: {
      intro:
        "Add products, organize your catalog, or import an existing product sheet.",
      catalog: "Product catalog",
      catalog_description:
        "Physical, virtual, file, service and subscription products.",
      categories: "Categories",
      categories_description: "Help customers find the right product.",
      import: "Excel import",
      import_description:
        "Use the existing importer to upload your product sheet.",
      add: "Add product",
      manage_categories: "Manage categories",
      import_action: "Import products",
      templates: "Download templates",
    },
    shipping: {
      intro:
        "Set your dispatch location and choose how orders reach customers.",
      warehouse: "Warehouse location",
      configured: "Dispatch location configured",
      not_configured: "Choose where orders are dispatched from.",
      delivery: "Delivery methods",
      delivery_description:
        "Carriers, local delivery, pickup and delivery rates.",
      manage: "Manage shipping",
      note: "Shipping options depend on your products and delivery region.",
    },
    migration: {
      intro: "Connect a supported platform or plan your migration with an AI assistant.",
      shopify: "Connect your existing Shopify store.",
      woocommerce: "Connect your existing WooCommerce store.",
      connect_shopify: "Connect Shopify",
      connect_woocommerce: "Connect WooCommerce",
      ai_title: "Migrate with AI",
      ai_description: "Prepare and review a migration with an AI assistant that supports MCP.",
      any_mcp: "Any MCP-capable AI service",
      ai_instructions: "Complete the official source and Selldone sign-in flows yourself. Paste this prompt into your AI assistant, then review its plan before approving changes.",
      mcp_guide: "MCP connection guide",
      copy_prompt: "Copy migration prompt",
      copied: "Copied",
      copying: "Copying prompt…",
      copy_success: "Prompt copied. Paste it into your AI assistant.",
      copy_fallback: "Prompt selected. Copy it manually.",
      view_prompt: "View migration prompt",
      prompt_label: "Migration prompt for the current shop",
      note: "Migration is optional and does not change the six-step completion count.",
      ai_prompt: "I want to migrate an existing store into my Selldone shop {shop}. Start with discovery and a migration plan. Do not change either store yet.\n\n1. Ask me for the source platform and store URL, confirm that I am authorized to migrate it, and clarify the data and scope: products, categories, variants/options, images/files, page content, customers, orders, discounts, inventory, prices/currencies, taxes, shipping and SEO/redirects. Ask what to exclude, approximate volume, priorities and cutover timing. Do not assume every data type can be imported.\n\n2. Guide me to personally complete the official source-platform and Selldone OAuth/MCP sign-in and consent flows. If the source has no approved connector, ask for an authorized official export instead. Never ask me to paste passwords, API keys, access/refresh tokens, cookies or other secrets into chat. Do not migrate customer passwords, sessions or payment credentials. Minimize personal data and do not expose it in logs or summaries.\n\n3. Discover the actual connected tools, permissions and supported capabilities for both systems, including export/import formats, pagination, batch/rate limits and media handling. Verify the connected destination is Selldone shop {shop} and confirm the source identity. Stop on a shop mismatch, denied access or missing capability. Do not invent tools or endpoints or claim a capability without checking it.\n\n4. Read only bounded samples and the destination data needed for the agreed scope. Map source identifiers, SKUs, product types, relationships, currencies, units, locales and inventory to supported Selldone fields. Identify duplicates, existing records, required transformations, unsupported items and potential data loss.\n\n5. Show me a preview and a concrete migration plan: what will be created, updated, skipped or unsupported, estimated counts, batch limits, validation and recovery steps. Ask for explicit approval before any write, overwrite or deletion. Never delete the source store or change domains, activate payments or cut over traffic without separate approval.\n\n6. After approval, work in bounded batches through the available authorized tools. Preserve stable source identifiers and mappings, avoid duplicates, make retries idempotent, checkpoint progress and respect tenant permissions and rate limits. Handle media through supported storage/import tools. Stop and report errors instead of silently dropping data or expanding the approved scope.\n\n7. Reconcile actual source and destination counts, variants, images, relationships, prices/currencies and inventory. Check representative customer and shopping flows only through authorized read/test previews. Report actual successes, failures, skipped/unsupported items and remaining manual steps. Ask me to review the result before the final cutover.",
    },
    customize: {
      intro: "Start with a page, redesign your layout, or build a completely new frontend.",
      level_1: "1",
      level_2: "2",
      level_3: "3",
      templates: "Your storefront, your style",
      templates_description: "Preview a template before applying it.",
      browse: "Browse templates",
      template: "Landing template",
      premium: "Premium",
      theme: "Brand & theme",
      theme_description: "Colors, fonts and store appearance.",
      theme_action: "Theme settings",
      pages: {
        title: "Build landing pages",
        human_ai: "Human or AI",
        visual_builder: "Visual builder",
        description: "Design pages with the built-in editor, or let AI help you create them. Start with a template and make it your own.",
        open_builder: "Open page builder",
      },
      build_ai: "Build with AI",
      advanced: "Advanced",
      layout: {
        title: "Create a custom layout",
        description: "Redesign the complete Selldone storefront. Keep your catalog, cart, checkout and customer accounts connected.",
        action: "Custom layout guide",
        repository: "Official storefront starter",
      },
      custom: {
        title: "Build your own frontend",
        description: "Create a new shopping journey in your preferred framework. Use the reference project and ask AI to build and test the complete experience.",
        action: "Frontend build guide",
        repository: "Custom frontend starter",
      },
      any_framework: "Any framework",
      footer: "One shop. Choose how much you want to customize.",
      tour: "Website tour",
      tour_description: "Explore storefront features and editing workflows.",
      start_tour: "Start tour",
    },
  },
  categories: {
    Baby: {
      title: "Baby, Kids & Toys",
      desc: "Stroller, Toys, Games, Puzzles, Action Figures",
    },
    Health: {
      title: "Health & Beauty",
      desc: "Pharmacy, Wellness, Cosmetic, Fragrance",
    },
    Media: {
      title: "Media & Games",
      desc: "Video Games, Movies, Music, Books",
    },
    Fashion: {
      title: "Clothing, Jewelry, & Watches",
      desc: "Clothing, Shoes, Necklace, Ring, Bracelet, Watch",
    },
    Automotive: {
      title: "Automotive",
      desc: "Car Accessories, Tools, Maintenance",
    },
    Electronics: {
      title: "Electronics",
      desc: "Mobile, TV, Audio Devices, Camera",
    },
    Computers: {
      title: "Computers",
      desc: "Laptops, Desktops, Accessories, Software",
    },
    Household: {
      title: "Household Essentials",
      desc: "Cleaning Supplies, Bathroom, Laundry",
    },
    Garden: {
      title: "Garden & Tools",
      desc: "Outdoor Furniture, Gardening Tools, Plants",
    },
    Food: {
      title: "Food & Groceries",
      desc: "Dairy, Fruit, Prepared Food, Meat, Beverage",
    },
    Handmade: {
      title: "Handmade",
      desc: "Collectibles, Painted Shoes, Sculptures, Glass Art",
    },
    PetSupplies: {
      title: "Pet Supplies",
      desc: "Pet Food, Pet Toys, Pet Care",
    },
    Home: {
      title: "Home & Living",
      desc: "Kitchen Appliances, Home Furniture, Decor",
    },
    Sports: {
      title: "Sports & Outdoors",
      desc: "Exercise, Camping, Bikes, Recreation",
    },
    Stationery: {
      title: "Stationery and Office",
      desc: "Office Supplies, School Supplies, Paper Products",
    },
    Books: {
      title: "Books",
      desc: "Fiction, Non-fiction, Educational, Comics",
    },
    Marketplace: {
      title: "Everything Marketplace",
      desc: "A wide variety of products from multiple categories",
    },
    Other: {
      title: "Other...",
      desc: "Gift Cards, Digital Products, Online Services, Anything",
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
    buy_domain_step: {
      title: "Step 1. Buy a domain",
      msg: "If you do not have your personal domain yet, it's time to buy your own domain from websites like namecheap.com .",
    },

    set_dns_step: {
      title: "Step 2. Set DNS records",
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

  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour: {
      title: "Tour",
      subtitle: "Discover what's possible here that isn't anywhere else.",
      /**
       * @see BShopOnboardingTour
       */
      avocado: {
        title: "Avocado - Sell Without Adding Any Product",
        description:
          "With Avocado, you can offer services or products without predefined prices or details. Create a custom form for your customers to request services or products. Once they submit their request, you can set the price and process the payment. Share the form on your social media, allowing customers to add items, upload images, and submit orders easily.",
        action: "Read About Avocado",
      },
      marketplace: {
        title: "Multi-vendor Marketplace & Auto Payout",
        description:
          "Build a thriving marketplace with Selldone by adding multiple vendors. Vendors can list their products, and you can set a commission rate for each sale. When a customer makes a purchase, the vendor receives the payment directly, manages the order through their dedicated panel, and you earn a commission via the auto payout feature.",
        action: "Auto Vendors Payout",
      },
      business_model: {
        title: "Support Complex Business Models",
        description:
          "Selldone supports both simple and complex business models, allowing you to adapt as needed. Configure everything behind the scenes without installing additional plugins or apps, ensuring seamless transitions and operations.",
      },
      gift_shopping: {
        title: "Product Locations Restriction & Gift Shopping",
        description:
          "Set location restrictions for each product by specifying multiple countries, ZIP codes, and cities. This feature is perfect for creating a personalized gift shopping experience or limiting product availability to specific locations, such as for restaurants.",
      },
    },

    template: {
      title: "Templates",
      msg: "Kickstart your shop with our pre-built templates! Easily diversify by adding multiple pages, each boasting its own unique design.",
      action: "View all templates...",
    },

    colors: {
      title: "Colors & Layout",

      msg: "Looking to tailor your product page and shop layout to better fit your vision? Dive into the theme customization section in your shop and watch the magic unfold effortlessly!",

      action: "Customize Colors & Theme",
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
