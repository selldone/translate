export default {
  /** @see ProductRatingView **/
  surveys: ["Muito ruim "," Ruim "," Normal "," Bom "," Excelente "],


  /** @see ShopFooter **/
  footer: {
    map: "Mapa",
    email: "O email",
    phone: "Telefone",
    address: "Endereço",

    copyright:
      "O uso de conteúdo apenas para fins não comerciais e com referência à fonte (link com {título_da_shop}). Todos os direitos reservados a {shop_title}. ",
    powered_by: "Distribuído por",
    privacy: "Política de Privacidade",
    term_of_use: "Termos de uso",
    shop_app_setting: "Configuração da loja e GDPR ",

    dialog_setting: {
      title: "Configuração de aplicativos da loja ",
      app_list: "Lista de aplicativos ",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Esgotado",
    review_unit: "Reveja",
    not_original: "Não é original",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtro",
    native: {
      title: "Login do aplicativo",
      message:
        "Este aplicativo requer acesso às informações da conta da sua loja. Isso inclui acesso a nome, número de contato, endereço, e-mail, histórico de pedidos, pedidos e postagem de comentários nesta loja. ",
      message_bold:
        "Certifique-se de usar o aplicativo oficial da loja para entrar nesta loja.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Ordenar por",
    title_small: "Ordenar por..",
    nothing: "Nada",
    most_views: "Mais visualizações",
    most_likes: "Mais popular",
    most_recent: "O mais novo",
    most_sell: "Best-seller",
    cheapest: "Mais barato",
    most_expensive: "Mais caro",
    only_available: "Disponível",
    view_mode: {
      normal: "Normal",
      grid: "Rede",
      list: "Lista",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Falso",
    action: "Leilão",
    compare_limit: "Limite de 10 itens",
    compare_add: "Adicionar para comparar",
    compare_be_in_list: "Na lista de comparação ",

    type: "Modelo",
    brand: "Marca",
    category: "Categoria",
    discount: "Desconto",
    track_price: "Rastrear preço",
    waiting_for_auction: "Esperando pelo leilão? ",
    inform_auction: "Fale-me sobre o leilão ",
    return_in_days: "{days} Dias de Devolução da Garantia ",
    support24h7: "Suporte 24 horas 7 dias ",
    support_normal: "Suporte em jornada de trabalho ",
    original_guarantee: "Garantia original ",
    cod_payment: "Suporte para pagamento na entrega ",

    pros: "Prós",
    cons: "Contras",

    external_link: "consulte Mais informação",
    notifications: {
      congratulation: "Parabéns",
      waiting_list_add_success:
        "Iremos notificá-lo quando este produto for leiloado. ",
      waiting_list_delete_success: "Você saiu da lista de espera do leilão. ",
    },

    offer_message: "Compre {min_quantity} Obtenha {percent}% de desconto para esses itens ",
    up_to: "Até {por pedido} x por pedido",
    get_free: "LIBERTA-TE",
    get_off: "OBTER {por cento}% DE DESCONTO",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "Aguardando disponibilidade",
    inform_me_when_available: "Esperando por isso? ",
    pay_buy: "Pague e compre ",
    quantity: "Contar",
    quantity_in_basket: "Itens no carrinho ",
    count_unit: "x",
    remove: "Retirar",
    add_to_basket: "Adicionar ao Carrinho",
    buy: "Comprar",
    notifications: {
      inform_add_success: "Avisaremos quando estiver disponível. ",
      inform_remove_success: "Você foi removido da lista de espera.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Análise",
    spec: "Spec",
    comments: "Comentários",
    related_products_title: "Produtos relacionados",
    price: "Preço",
    rate: "Avaliar",
    comment: "Comente",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "Histórico de pedidos",
      profile: "Perfil",
      favorites: "Meus favoritos",
      gift_cards: "Cartões de presente",
      return_requests: "Pedidos de devolução ",
      basket: "Carrinho de compras",
    },
    user_menu: {
      my_shops: "Minhas lojas ",
      go_to_admin: "Gerenciar {shop_name} ",
      exit_from: "Sair de {shop_name} ",
      chips: "{chips} Chips",
    },
    login_to_shop: "Entrar na loja",
    login_to_shop_short: "Conecte-se",
    item_in_basket_message: "{contagem} Este item está em seu carrinho.",
    search_title: "Pesquise na loja {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Carrinho",
    basket_is_empty: "Seu carrinho está vazio.",
    total_price: "Total",
    view_basket: "Ver carrinho",
    more: "Mais ...",
    accept_and_pay: "Confira",
    items: "Itens)",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rejeitado",
    table: {
      code: "Código de encomenda",
      reserved: "Encontro",
      delivery_state: "Status de entrega",
      price: "Preço total",
      status: "Status do pagamento",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Código de encomenda",
      items: "Itens",
      reserved: "Encontro",
      delivery_state: "Status mais recente",
      price: "Preço total",
      status: "Status do pagamento",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Cartão Presente",
      comments: "Comentários",
      favorites: "Favoritos",
      return_requests: "Devoluções",
      addresses: "Endereços",
      profile: "perfil",
      orders: "Pedidos",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Pedido",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Pagamento",
      payment_waiting: "À espera de pagamento",
      payment_completed: "Pago",
      table: {
        title: "Título",
        amount: "Quantia",
        description: "Descrição",
      },
      total_payment: "Quantia paga",
      discount: "Desconto",
      discount_code: "Código de desconto",
      delivery_fee: "Frete",
      delivery_fee_after: "Nenhuma entrega paga",

      total_price: "Preço total dos itens",
      total_items_discount: "Desconto de itens",
      total_price_after_offers: "Preço total após aplicar as ofertas ",

      buyer_payment: "Valor de pagamento do comprador ",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Entrega",
      subtitle: "Informações do comprador ",
      confirm_received_action: "Confirme o recebimento do produto ",
      confirm_received_info:
        "Clique no botão de confirmação se você recebeu o pedido. Se necessário, você poderá enviar uma referência se receber a confirmação. ",
      receiver: "Receptor",
      bill: "Fatura",
      name: "Nome",
      tel: "Telefone",
      email: "O email",
      country: "País",
      state: "Estado",
      city: "Cidade",
      address: "Endereço",
      building_no: "Número do edifício",
      unit_no: "Número de unidade",
      postal_code: "Código Postal",
      description: "Descrição",
      order_delivered: "O pedido foi entregue.",
      delivery_time: "Tempo de entrega",
      tracking_code: "Código de rastreamento",
      tracking_url: "URL de rastreamento",

      notifications: {
        confirm_delivery: "Seu pedido foi aprovado. ",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Garantia de originalidade das mercadorias ",
      return: "Retornar",
      table: {
        product: "Nome do Produto",
        count: "Contar",
        unit_price: "Preço unitário",
        total_price: "Preço total",
        discount: "Desconto",
        final_price: "Preço final",
        returned: "Retornou",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Retornar",
    count_input: "Número de itens devolvidos ",
    count_input_message: "Quantos você devolve? ",
    reason_input: "Razão para retornar",
    reason_input_message: "Selecione o motivo da devolução deste item.",
    note_input: "Descrição",
    note_input_hint: "Descreva o motivo da referência .. ",
    note_input_message:
      "Descreva o motivo para se referir a este item, se necessário.",
    media_message:
      "Você pode fazer upload de imagem, áudio ou vídeo do produto aqui para obter melhor suporte para informações de status do produto. Selecionar o arquivo enviará e confirmará automaticamente. ",
    video: "Vídeo",
    voice: "Voz",
    add_action: "Enviar pedido de devolução ",
    notifications: "Sua solicitação de indicação foi registrada com sucesso. ",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Pedido",
    info: {
      title: "Produto Virtual Adquirido ",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Minha informação pessoal",
    name: "Nome",
    email: "O email",
    tel: "Tel",
    identity: "Autenticação",
    success_kyc: "KYC aprovado ",
    club: "Nível de usuário",
    subscription: "Assinatura de notícias ",
    leave_shop: "Saia desta loja e remova todos os níveis de clientes",
    leave_shop_action: "Sair da loja",
    leave_dialog: {
      title: "Sair da loja ",
      message:
        "O cancelamento da assinatura desta loja não excluirá as informações e os registros do seu pedido. ",
      action: "Sair",
    },
    notifications: {
      leave_success: "Sair da loja ",
    },
    club_table: {
      discount: "Desconto",
      limit: "Limite",
      currency: "Moeda",
      free_shipping: "Envio Grátis",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Carrinho de compras",
    total_price: "Montante total",
    shipping: "Frete",
    free_shipping: "Envio Grátis",
    shipping_not_pay: "Não incluso",
    total_discount: "Desconto total ",
    customer_club: "Membro do Clube Cliente ",
    customer_club_discount: "Desconto para membros",
    final_price: "Pagamento final",
    lead_time: "Tempo de preparação",
    lead_time_unit: "hora",
    receive_time: "Hora de receber ",
    select_time: "Selecione o tempo de entrega ",
    no_select_time: "Envie quando estiver pronto.",
    transportation_type: "Tipo de veículo",
    days_input: "Dias de entrega ",
    days_input_label: "Dias",
    days_input_no_data: "Selecione pelo menos um dia ",
    time_input: "Tempo de entrega",
    time_input_label: "Entrega em ",
    time_input_label_no_data: "Selecione pelo menos um intervalo de tempo",
    support_cod: "Dinheiro na entrega",
    not_support_cod: "Incapaz de pagar localmente! ",
    final_confirm_action: "Confirmação final do pedido",
    pay_and_complete_action: "Pague agora",
    pre_confirm_service: "Enviar pedido",

    errors: {
      no_address: "Selecione o endereço para o qual deseja que seu pedido seja enviado.",
      no_phone: "Insira um número de contato para coordenar o recebimento de mercadorias. ",
      select_billing_country: "Selecione seu país de faturamento",
      select_billing_state: "Selecione sua região fiscal ",
    },
    same_billing_address: "Informações de faturamento iguais às informações do receptor ",
    custom_billing_info: "Informações de faturamento diferentes",
    basket_empty: "A cesta está vazia ",
    extra_shipping_count: "Você receberá pacotes de {count}. ",
    select_location_error:
      "Encontre o local de recebimento da remessa no mapa e clique no indicador no meio do mapa para determinar o endereço exato do destinatário. ",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "hora",
    count_input: "Contar",

    price_changed: "O preço mudou. novo preço:",
    offer: "Obtenha {count} x item com {percent}% de desconto ",
    offer_free: "Obtenha {count} x grátis ",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Meus endereços",
    new_action: "Novo endereço",
    receiver: "Receptor ",
    address: "Endereço",
    building_no: "placa de carro",
    building_unit: "unidade",
    postcode: "Código Postal",
    tel: "Tel",
    description: "Observação",

    map: {
      title: "Meus endereços",
      confirm: "Registro de endereço ",
      address_type: "Endereço",
      receptor_type: "Receptor",
    },
    add_dialog: {
      title: "Novo nome de endereço ",
      message: "Insira um título para um novo endereço. ",
      address_name_input: "Endereço (obrigatório)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Pedidos de devolução ",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "Lista de Desejos",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Meus comentários",
    first_post: "Primeiro post",
    last_edit: "Última edição ",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Meus cartões-presente ",
    add_action: "Adicionar cartão",
    add_card_dialog: {
      title: "Adicionar vale-presente",
      message:
        "Digite o número do cartão e o código de segurança. Um cartão-presente será adicionado à sua conta. ",
      card_number_input: "número do cartão",
      info: "Nota: Ao comprar na loja, será mostrada a opção de pagar com vale-presente. Ao selecionar esta opção, o valor do seu saldo de recarga será deduzido do valor do pedido. ",
      add_action: "Registro de cartão ",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Comparar produtos ",
    action_button: "comparar",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "Nenhum produto foi adicionado à lista de comparação. ",
      price: "Preço",
      type: "Modelo",
      brand: "Marca",
      warranty: "garantia",
      variants_comparison: "Compare a diversidade de produtos",
      spec: "Especificações técnicas",
      pros: "Prós",
      cons: "Contras",
      user_review: "Comentários do usuário ",
      rating: "Avaliação",
      rating_count: "Número de comentários ",
      info: "Você pode compartilhar esta tabela de comparação de produtos com seus amigos enviando o link a seguir ou acessando-a posteriormente salvando este link. ",
      copy_action: "Copiar link de comparação",
      check_list: ["Sim", "Tem"],
      cross_list: ["Não", "Não tem"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Somente originais ",
    only_has_discount: "Apenas com desconto ",
    price_range: "Faixa de preço",
    brands: "Marca",
    main_shop_page: "Página principal da loja ",
    home: "Casa",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Caro {usuário}, você adquiriu este produto. O que você acha sobre este produto?",
    notification: {
      title: "Parabéns",
      message: "Seu comentário foi gravado. ",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "Novo Blog",
    popular: "Popular",
    topics: "Tópicos",
    suggestions: "Sugestões",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "Sobre nós",
    terms: "Termos de uso",
    privacy: "Política de Privacidade",
    contact_us: "Contate-Nos",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Formulário de contato ",
    name: "Nome",
    email: "O email",
    phone: "Telefone",
    message: "Mensagem",
    notifications: {
      success: "Sua mensagem foi enviada.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Confirmação de pagamento",
      payment_success: "Pagamento completo.",
      buy_title: "Comprar",
      pay_by_giftcards: "Seu pedido foi pago com um vale-presente. ",
      free_order: "Seu pedido é grátis.",
      pay_by_cod: "Seu pedido foi adicionado como pagamento na entrega. ",
      pay_by_dir:
        "Seu pedido foi adicionado com sucesso. Agora você pode pagar por transferência direta de dinheiro e, em seguida, fazer o upload do comprovante de pagamento na página do pedido. ",
      pay_title: "Pagamento",
      qr_code_payment: "O endereço do código QR de pagamento foi criado. ",
      connecting_to_online_gateway: "Conectando-se ao gateway de pagamento online. ",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Restando para o começo",
    title_between_start_end: "Ficando até o fim ",
    title_after_end: "Finalizado",
    title_no_start_end: "Sem prazo! ",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Você pode receber um presente por pedido. ",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Código do cupom",
    add_coupon: "Adicionar cupom",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "A forma abacate não está habilitada! ",
    last_update: "Última atualização:",
    step1:
      "1. Insira o nome e os detalhes do produto que deseja solicitar e clique no botão Adicionar. ",
    title_plc: "Insira o nome do produto. ",
    description_plc: "Você tem mais descrições de produtos? ",
    link_plc: "Você tem um link para o produto? ",
    image: "Imagem do Produto",
    image_msg: "Você pode enviar a imagem do produto, se necessário. ",
    add_item: "Adicionar Item",
    items_list: "Lista de produtos solicitados",
    currency_msg: "Você deve pagar o valor deste pedido com esta moeda.",
    step2:
      "2. Depois de adicionar todos os itens desejados, clique no botão de solicitação de revisão do pedido. Nesta fase, iremos rever a encomenda e informá-lo sobre o preço. Ao clicar neste link, você poderá ver o link de preço e pagamento. ",
    order_action: "Registro do pedido ",
    show_all: "Mostre tudo",
    show_accepted: "Mostrar itens verificados ",
    last_orders: "Lista de seus últimos pedidos ",
    pending_status: "sob revisão",
    check_now: "Verifique o pedido ",
    add_new_order: "Registrar novo pedido ",
    pay_online: "pagar online",
    pricing_not_completed_message:
      "Seu pedido está sendo revisado. Seu pedido será analisado e avaliado em breve e você poderá pagar o pedido. ",

    delete_item_dialog: {
      title: "Remova o item do carrinho de compras",
      message: "Quer deletar este item do carrinho? ",
      action: "Sim, exclua ",
    },

    notifications: {
      order_success: "Seu pedido foi feito com sucesso. ",
      delete_success: "Item excluído. ",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Criação de pedido ",
    message:
      "Crie a lista de produtos que deseja comprar digitalizando o código do produto. ",

    currency_msg: "A moeda com a qual você deseja pagar. ",
    order_action: "Pagamento",
    add_new_order: "Nova ordem",
    continue_order: "Continuar pedido ",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Carregar imagem do comprovante de pagamento. ",
    upload_payment_receipt_done:
      "✔ Você já carregou a imagem do recibo, aguarde nossa aprovação. Se precisar mudar, você pode substituir a imagem anterior por uma nova. ",
    public_form_title: "Informações da conta para transferência de dinheiro ",
  },
};
