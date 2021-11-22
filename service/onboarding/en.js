export default {
  categories: {
    Retail: {
      title: "Retail",
      desc: "Selling Consumer Goods or Services",
    },

    Beauty: {
      title: "Beauty/Health",
      desc: "Cosmetic, Fragrance, Hair Care",
    },
    Blog: {
      title: "Blog",
      desc: "Sports blog, Science blog, Technology blog",
    },
    Clothing: {
      title: "Clothing & Shoes",
      desc: "Clothing",
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
      desc: "Collectible, Painted shoes, Sculpture, Glass Art",
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
      title: "Online courses",
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

  name: "Setup",
  shop: {
    title: "Setup my shop",
    subtitle: "Go to the next level by completing these simple steps.",
  },

  open_website: "Open my website",

  add_product: "Add product",
  setup_shipping: "Setup shipping",
  add_domain: "Add domain",
  add_payment: "Connect to payment",

  product: {
    step1: {
      title: "Option 1. Add manually",
      msg: "You can add physical products, virtual items, files, services, and any other type of products to your store and start selling them.",
      action_on: "Add your first product",
      action_off: "Add more products",
      category:
        "Categories are the masterpiece of your online shopping website compared to others. Make everything classified and arranged by adding categories and managing by drag & drop.",
      add_category: "Add category",
    },
    step2: {
      title: "Option 2. Add by Excel",
      msg: "Have many products, like 1K, 10K items? Don't worry import all just by one action.",
      import_excel: "Import by Excel",
      download_template: "Download template",
    },
    step3: {
      title: "Option 3. Hire experts",
      msg: "Have more than 100 items and need someone to add your products? send a request to expert@selldone.com, and book an appointment. We hire experts for you. It has a simple flat rate, just 5.99$ per item and 2.99$ per additional variants.",
    },
  },
  shipping: {
    step1: {
      title: "Step 1. Set location",
      msg: "At the first step, set your warehouse (origin of delivery). This information is used to calculate the distance, shipping cost, and check to be in the delivery service area.",
      edit_warehouse: "Edit warehouse",
      add_warehouse: "Add your warehouse",
    },
    step2: {
      title: "Step 2. Activate delivery methods",
      msg: "Add at least one delivery method in your store. You can set pricing based on weight, distance, and other parameters. Don't forget to set constraints like coverage distance, maximum weight, and size of the activated delivery services.",
      add_delivery: "Add delivery methods",
    },
  },

  domain: {
    step1: {
      title: "Step 1. Buy a domain",
      msg: "If you have not your domain yet, it's time to buy your domain from websites like namecheap.com .",
    },
    step2: {
      title: "Step 2. Enable SSL",
      msg: "If you use services like Namecheap that provide CDN and SSL, you just need to activate 1.CDN and 2.SSL on your domain.",
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
      msg: "Add cash on delivery, online, and other available payment methods in your shop.",
      online_title: "Online payment methods",
      online_msg:
        "Accept payment by cards, new banking applications, buy-now-pay-later, and many other online payment methods.",
      add_online_gateway: "Add an online payment method",
      cod_title: "Cash on delivery payment methods",
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
};
