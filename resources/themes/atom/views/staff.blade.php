@extends('layouts.app')

@push('title', __('Welcome to the best hotel on the web!'))

@section('content')
    <div class="col-span-12 lg:col-span-9 lg:w-[96%]">
        <div class="flex flex-col gap-3">
            <x-staff.list :permissions="$permissions" />
        </div>
    </div>

    <div class="col-span-12 lg:col-span-3 lg:w-[110%] space-y-4 lg:-ml-[32px]">
        <x-card.base title="{{ __(':hotel staff', ['hotel' => $settings->get('hotel_name')]) }}" subtitle="{{ __('About the :hotel staff', ['hotel' => $settings->get('hotel_name')]) }}" icon="chat">
            <div class="prose-sm prose dark:prose-invert">
                <p>{{ __('The :hotel staff team is one big happy family, each staff member has a different role and duties to fulfill.', ['hotel' => $settings->get('hotel_name')]) }}</p>
                <p>{{ __('Most of our team usually consists of players that have been around :hotel for quite a while, but this does not mean we only recruit old & known players, we recruit those who shine out to us!', ['hotel' => $settings->get('hotel_name')]) }}</p>
            </div>
        </x-card.base>

        <x-card.base title="{{ __('Apply for staff') }}" subtitle="{{ __('How to join the staff team', ['hotel' => $settings->get('hotel_name')]) }}" icon="chat">
            <div class="prose-sm prose dark:prose-invert">
                <p>{{ __('Every now and then staff applications may open up. Once they do we always make sure to post a news article explaining the process - So make sure you keep an eye out for those in you are interested in joining the :hotel staff team.', ['hotel' => $settings->get('hotel_name')]) }}</p>
                <p>{!! __('You can occasionally also look at the :startTag Staff application page :endTag which will show you all of our current open positions.', ['startTag' => '<a href="/community/staff-applications" class="underline">', 'endTag' => '</a>']) !!}</p>
            </div>
        </x-card.base>
    </div>
@endsection