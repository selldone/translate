<?php

return [
    'issued' => [
        'subject' => 'Your installment bill: :title',
        'title' => 'Your payment plan is ready',
        'text' => 'Selldone has issued “:title” for :amount in :count monthly installments. Review the complete schedule, then securely connect your card to authorize automatic payments.',
    ],
    'card_connected' => [
        'subject' => 'Card connected to your bill: :title',
        'title' => 'Your card is connected',
        'text' => 'Your card is authorized for the finite payment schedule of “:title”. Due installments can now be collected automatically. View your bill to check the schedule and progress.',
    ],
    'cancel_requested' => [
        'subject' => 'Collection stopped for your bill: :title',
        'title' => 'No new payments will be started',
        'text' => 'Selldone has requested cancellation of “:title”. New collection is stopped. A payment already processing may still complete; we will confirm the final result by email.',
    ],
    'canceled' => [
        'subject' => 'Your installment bill was canceled: :title',
        'title' => 'Your payment plan is canceled',
        'text' => '“:title” has been canceled. No future installments will be collected. Payments already made remain in your history; this cancellation does not issue a refund.',
    ],
    'payment_failed' => [
        'subject' => 'Payment needs attention: :title',
        'title' => 'An installment payment needs attention',
        'text' => 'The attempt to collect installment :number of “:title” for :amount was unsuccessful or needs your bank’s authentication. Open your bill to review its current status and next steps.',
    ],
    'payment_paid' => [
        'subject' => 'Installment payment received: :title',
        'title' => 'Your installment was paid',
        'text' => 'We received :amount for installment :number of “:title”. Your payment history and progress are shown below.',
    ],
    'completed' => [
        'subject' => 'Your bill is fully paid: :title',
        'title' => 'Your payment plan is complete',
        'text' => 'The full :amount for “:title” has been paid. Your remaining balance is zero and no further installments will be collected.',
    ],
    'event_date' => 'Event date',
    'snapshot' => 'Payment history when this event occurred',
    'first_due' => 'First payment date',
    'count' => 'Monthly installments',
    'open_bill' => 'View your bill',
    'footer' => 'This is a transactional message about your official Selldone bill. Sign in to the account this bill belongs to in order to view or manage it.',
];
