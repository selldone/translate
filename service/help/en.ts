/*
 * Copyright (c) 2024. Selldone® Business OS™
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
type IHelpItem = {
  embed: string;
  title: string;
  description?: string;
  youtube?: string;
  link?: string;
};
type IHelp = {
  [key: string]: {
    [key: string]: IHelpItem | IHelp;
  };
};
export default {
  CrossSelling: {
    Add: {
      embed: "cm0i1jeq71097w8i42n158rhy",
      title: "How to add cross selling",
    },
  },
  Connect: {
    Main: {
      embed: "cm2kfysmn0icr9j0hyxo7kp6w", // We set Printful as main demo!
      title: "How connect works",
    },
    Printful: {
      embed: "cm2kfysmn0icr9j0hyxo7kp6w",
      title: "Printful Connect",
    },
    XCart: {
      embed: "cm158815w03reme0p9xuh044q",
      title: "XCart Migration",
    },
  },

  Logistic: {
    Shipping: {
      embed: "cm1uw548e0gvt13b30xkjj7c0",
      title: "Add Shipping Method",
    },
  },

  Security: {
    ChangePrimaryEmail: {
      embed: "cm2irhaw238tivm5stoxf88bd",
      title: "Change Primary Email",
    },
  },

  Domain: {
    RedirectWWW: {
      embed: "cm2h7pzxt2x5mvm5sauxkg999",
      title: "Redirect WWW",
    },
  },

  Menu: {
    Footer: {
      Customize: {
        embed: "cm2ll9doz05wipxsmtruua314",
        title: "Customize Footer Menu",
      },
    },
  },

  Landing: {
    SEO: {
      Customize: {
        embed: "cm2llfaod04w2xxrv5bzivivq",
        title: "Change Title & Image",
        description: "Change Landing Page Title and Logo",
        youtube: "https://youtu.be/QUUdivuHw8I",
      },
    },
    Editor: {
      DeleteSection: {
        embed: "cm6x9srtx068m3wrqzey93i2n",
        title: "Delete Section",
        description: "How to Delete Section In Page Builder",
        youtube: "https://youtu.be/LRCJIlNvVsE",
      },
      DuplicateSection: {
        embed: "cm6w1odnv00jkvf48pulgd707",
        title: "Duplicate Section",
        description: "How to Duplicate Section in Page Builder",
        youtube: "https://youtu.be/hcnyEXSa3Vs",
      },
      CloneStyle: {
        embed: "cm6xw85xo0aej3wrqnykgsq20",
        title: "Clone Style",
        description: "How to Duplicate Style in Page Builder",
        youtube: "https://youtu.be/-6Xl9HpaGgo",
      },
    },
    Repository: {
      Add: {
        embed: "cm45b6g461heajfcxyss0a92h",
        title: "Save & Reuse Sections",
        description: "How to Save and Reuse Sections in Page Builder",
        youtube: "https://youtu.be/nIjebcUC9u0",
      },
    },
    Header: {
      Customize: {
        embed: "cm39ssbde00s0stf0t6u1ffhw",
        title: "Customize Header",
        description: "How to Adjust Header in Page Builder",
        youtube: "https://youtu.be/eOMtBpCPrDs",
      },
    },
    Style: {
      PageTypography: {
        embed: "cm39poquy00a8stf0ecqamy01",
        title: "Page Typography",
        description: "Adjust Font Style in Page Builder",
        youtube: "https://youtu.be/sFj0KAtXzeg",
      },
    },
  },

  Product: {
    Variants: {
      AddBulkVariants: {
        embed: "cm2ztbeft024y533he77woppk",
        title: "Add Bulk Variants",
      },
    },
  },

  Marketplace: {
    Payout: {
      Overview: {
        title: "Payout Overview",
        link: "https://selldone.com/blog/payout-vendors-manually-and-automatically-by-stripe-connect-712",
      },
    },
  },

  Shuttle: {
    Deals: {
      CreateStore: {
        embed: "cm2viiihl1z1gesgvafqjr1nv",
        title: "Create New LTD Store",
      },
    },
  },
} as IHelp;
