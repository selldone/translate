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

export default class LanguagesRepository {
  static GLOBAL = "GLOBAL";
  static COLORS = "COLORS";
  static LANGUAGES = "LANGUAGES";
  static DASHBOARD = "DASHBOARD";
  static COMMUNITY = "COMMUNITY";
  static BUSINESS_IDEAS = "BUSINESS_IDEAS";
  static EXPERT = "EXPERT";
  static FEEDBACK = "FEEDBACK";
  static FOOTER = "FOOTER";
  static GUILD = "GUILD";
  static HOME = "HOME";
  static MENUS = "MENUS";
  static ONBOARDING = "ONBOARDING";
  static PRICE_LIST = "PRICE_LIST";
  static SHOP = "SHOP";

  static PACKAGES = [
    { path: "global/colors", pack: LanguagesRepository.COLORS },
    { path: "global/languages", pack: LanguagesRepository.LANGUAGES },
    { path: "global/community", pack: LanguagesRepository.COMMUNITY },
    { path: "global", pack: LanguagesRepository.GLOBAL },
    {
      path: "service/business-ideas",
      pack: LanguagesRepository.BUSINESS_IDEAS,
    },
    { path: "service/expert", pack: LanguagesRepository.EXPERT },
    { path: "service/feedback", pack: LanguagesRepository.FEEDBACK },
    { path: "service/guild", pack: LanguagesRepository.GUILD },
    { path: "service/home", pack: LanguagesRepository.HOME },
    { path: "service/menus", pack: LanguagesRepository.MENUS },
    { path: "service/onboarding", pack: LanguagesRepository.ONBOARDING },
    { path: "service/pricelist", pack: LanguagesRepository.PRICE_LIST },
    { path: "shop", pack: LanguagesRepository.SHOP },
    { path: "dashboard", pack: LanguagesRepository.DASHBOARD },
    { path: "service/footer", pack: LanguagesRepository.FOOTER },
  ];

  static PACKAGES_SHOP_OVERRIDE = [
    { path: "global", pack: LanguagesRepository.GLOBAL, pack_code: "global" },
    { path: "shop", pack: LanguagesRepository.SHOP, pack_code: "shop" },
  ];

  pack: any;

  constructor(pack: any) {
    this.pack = pack;
  }

  load(lang: string) {
    switch (this.pack) {
      case LanguagesRepository.DASHBOARD:
        return this.loadDashboard(lang);

      case LanguagesRepository.COLORS:
        return this.loadColors(lang);

      case LanguagesRepository.LANGUAGES:
        return this.loadLanguages(lang);

      case LanguagesRepository.COMMUNITY:
        return this.loadCommunity(lang);
      case LanguagesRepository.GLOBAL:
        return this.loadGlobal(lang);

      case LanguagesRepository.BUSINESS_IDEAS:
        return this.loadBusinessIdeas(lang);

      case LanguagesRepository.EXPERT:
        return this.loadExpert(lang);

      case LanguagesRepository.FEEDBACK:
        return this.loadFeedback(lang);

      case LanguagesRepository.FOOTER:
        return this.loadFooter(lang);

      case LanguagesRepository.GUILD:
        return this.loadGuild(lang);

      case LanguagesRepository.HOME:
        return this.loadHome(lang);

      case LanguagesRepository.MENUS:
        return this.loadMenus(lang);

      case LanguagesRepository.ONBOARDING:
        return this.loadOnboarding(lang);
      case LanguagesRepository.PRICE_LIST:
        return this.loadPricelist(lang);

      case LanguagesRepository.SHOP:
        return this.loadShop(lang);
    }

    return null;
  }

  // 📁 dashboard
  loadDashboard(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../dashboard/${lang}.ts`
    );
  }

  // 📁 global/colors
  loadColors(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../global/colors/${lang}.ts`
    );
  }

  // 📁 global/languages
  loadLanguages(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../global/languages/${lang}.ts`
    );
  }

  // 📁 global/community
  loadCommunity(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../global/community/${lang}.ts`
    );
  }

  // 📁 global
  loadGlobal(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../global/${lang}.ts`
    );
  }

  // 📁 service/business-ideas
  loadBusinessIdeas(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/business-ideas/${lang}.ts`
    );
  }

  // 📁 service/expert
  loadExpert(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/expert/${lang}.ts`
    );
  }

  // 📁 service/feedback
  loadFeedback(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/feedback/${lang}.ts`
    );
  }

  // 📁 service/footer
  loadFooter(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/footer/${lang}.ts`
    );
  }

  // 📁 service/guild
  loadGuild(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/guild/${lang}.ts`
    );
  }

  // 📁 service/home
  loadHome(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/home/${lang}.ts`
    );
  }

  // 📁 service/menus
  loadMenus(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/menus/${lang}.ts`
    );
  }

  // 📁 service/onboarding
  loadOnboarding(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/onboarding/${lang}.ts`
    );
  }

  // 📁 service/pricelist
  loadPricelist(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../service/pricelist/${lang}.ts`
    );
  }

  // 📁 service/shop
  loadShop(lang: string) {
    return import(
      /* webpackChunkName: "no-upload/languages-pack/lang-[request]" */ `../shop/${lang}.ts`
    );
  }
}
