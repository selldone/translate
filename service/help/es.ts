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
      title: "Cómo añadir venta cruzada",
    },
  },
  Connect: {
    Main: {
      embed: "cm2kfysmn0icr9j0hyxo7kp6w", // We set Printful as main demo!
      title: "Cómo funciona Connect",
    },
    Printful: {
      embed: "cm2kfysmn0icr9j0hyxo7kp6w",
      title: "Printful Connect",
    },
    XCart: {
      embed: "cm158815w03reme0p9xuh044q",
      title: "Migración desde XCart",
    },
  },

  Logistic: {
    Shipping: {
      embed: "cm1uw548e0gvt13b30xkjj7c0",
      title: "Añadir método de envío",
    },
  },

  Security: {
    ChangePrimaryEmail: {
      embed: "cm2irhaw238tivm5stoxf88bd",
      title: "Cambiar el correo electrónico principal",
    },
  },

  Domain: {
    RedirectWWW: {
      embed: "cm2h7pzxt2x5mvm5sauxkg999",
      title: "Redirigir WWW",
    },
  },

  Menu: {
    Footer: {
      Customize: {
        embed: "cm2ll9doz05wipxsmtruua314",
        title: "Personalizar el menú del pie de página",
      },
    },
  },

  Landing: {
    SEO: {
      Customize: {
        embed: "cm2llfaod04w2xxrv5bzivivq",
        title: "Cambiar título e imagen",
        description: "Cómo cambiar el título y el logotipo de la página de destino",
        youtube: "https://youtu.be/QUUdivuHw8I",
      },
    },
    Editor: {
      DeleteSection: {
        embed: "cm6x9srtx068m3wrqzey93i2n",
        title: "Eliminar sección",
        description: "Cómo eliminar una sección en el constructor de páginas",
        youtube: "https://youtu.be/LRCJIlNvVsE",
      },
      DuplicateSection: {
        embed: "cm6w1odnv00jkvf48pulgd707",
        title: "Duplicar sección",
        description: "Cómo duplicar una sección en el constructor de páginas",
        youtube: "https://youtu.be/hcnyEXSa3Vs",
      },
      CloneStyle: {
        embed: "cm6xw85xo0aej3wrqnykgsq20",
        title: "Clonar estilo",
        description: "Cómo duplicar un estilo en el constructor de páginas",
        youtube: "https://youtu.be/-6Xl9HpaGgo",
      },
    },
    Repository: {
      Add: {
        embed: "cm45b6g461heajfcxyss0a92h",
        title: "Guardar y reutilizar secciones",
        description: "Cómo guardar y reutilizar secciones en el constructor de páginas",
        youtube: "https://youtu.be/nIjebcUC9u0",
      },
    },
    Header: {
      Customize: {
        embed: "cm39ssbde00s0stf0t6u1ffhw",
        title: "Personalizar el encabezado",
        description: "Cómo ajustar el encabezado en el constructor de páginas",
        youtube: "https://youtu.be/eOMtBpCPrDs",
      },
    },
    Style: {
      PageTypography: {
        embed: "cm39poquy00a8stf0ecqamy01",
        title: "Tipografía de la página",
        description: "Ajusta el estilo de fuente en el constructor de páginas",
        youtube: "https://youtu.be/sFj0KAtXzeg",
      },
    },
  },

  Product: {
    Variants: {
      AddBulkVariants: {
        embed: "cm2ztbeft024y533he77woppk",
        title: "Añadir variantes en masa",
      },
    },
  },

  Marketplace: {
    Payout: {
      Overview: {
        title: "Resumen de pagos a vendedores",
        link: "https://selldone.com/blog/payout-vendors-manually-and-automatically-by-stripe-connect-712",
      },
    },
  },

  Shuttle: {
    Deals: {
      CreateStore: {
        embed: "cm2viiihl1z1gesgvafqjr1nv",
        title: "Crear una nueva tienda LTD",
      },
    },
  },
} as IHelp;
