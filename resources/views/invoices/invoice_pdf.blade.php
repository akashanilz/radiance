<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "//www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="{{ asset('favicon.ico') }}">
    <title>Invoice PDF</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/invoice-pdf.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<table width="100%">
    <tr>
        <td class="header-left">
            <div class="main-heading">{{ __('messages.invoice.invoice') }}</div>
            <div class="invoice-number font-color-gray">{{ __('messages.invoice.invoice_id') }}
                #{{ $invoice->invoice_id }}</div>
        </td>
        <td class="header-right">
            <div class="logo"><img width="100px" src="{{ $setting['app_logo'] }}" alt=""></div>
            <div class="hospital-name">{{ $setting['app_name'] }}</div>
            <div class="hospital-name font-color-gray">{{ $setting['hospital_address'] }}</div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table class="address w-100">
                <tr>
                    <td>
                        <table class="patient-detail-one">
                            <tr>
                                <td class="text-left">
                                    <span class="font-weight-bold ">{{ __('messages.advanced_payment.patient') }}</span>: {{ $invoice->patient->user->full_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-weight-bold ">{{ __('messages.common.address') }}</span>: {{ !empty($invoice->patient->address->address1) ? $invoice->patient->address->address1.',':'N/A'}}
                                    <br><span>{{ !empty($invoice->patient->address->address2)?$invoice->patient->address->address2.',':'' }}</span>
                                    <br><span>{{ !empty($invoice->patient->address->city)?$invoice->patient->address->city.',':'' }}  {{ !empty($invoice->patient->address->zip)?$invoice->patient->address->zip.'.':'' }}</span>

                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="text-right">
                        <table class="patient-detail-two">
                            <tr>
                                <td>
                                    <span class="font-weight-bold ">{{ __('messages.invoice.invoice_date') }}</span>: {{ $invoice->created_at->format('jS M, Y') }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="invoice-items">
                    <td colspan="2">
                        <table class="items-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('messages.account.account') }}</th>
                                <th>{{ __('messages.invoice.description') }}</th>
                                <th class="number-align">{{ __('messages.invoice.qty') }}</th>
                                <th class="number-align">{{ __('messages.invoice.price') }}
                                    (<b>{{getCurrencySymbol()}}</b>)
                                </th>
                                <th class="number-align">{{ __('messages.invoice.amount') }}
                                    (<b>{{getCurrencySymbol()}}</b>)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($invoice) && !empty($invoice))
                                @foreach($invoice->invoiceItems as $key => $invoiceItems)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $invoiceItems->account->name }}</td>
                                        <td>{!! nl2br(e($invoiceItems->description)) !!}</td>
                                        <td class="number-align">{{ $invoiceItems->quantity }}</td>
                                        <td class="number-align">{{ number_format($invoiceItems->price, 2) }}</td>
                                        <td class="number-align">{{ number_format($invoiceItems->total, 2) }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table class="invoice-footer">
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.invoice.sub_total') }}:</td>
                                <td>
                                    <b>{{getCurrencySymbol()}} </b> {{ number_format($invoice->amount, 2) }}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.invoice.discount') }}:</td>
                                <td>{{ $invoice->discount }}<span style="font-family: DejaVu Sans">&#37;</span></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.invoice.total') }}:</td>
                                <td>
                                    <b>{{getCurrencySymbol()}} </b> {{ number_format($invoice->amount - ($invoice->amount * $invoice->discount / 100), 2) }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
