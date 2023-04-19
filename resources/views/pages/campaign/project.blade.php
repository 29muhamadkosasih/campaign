@extends('pages.campaign.index')

@section('contentsecond')

<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack mb-6">
    <!--begin::Title-->
    <h3 class="fw-bold my-2">My Campaigns
        <span class="fs-6 text-gray-400 fw-semibold ms-1"></span></h3>
    <!--end::Title-->
    <!--begin::Controls-->
    <div class="d-flex align-items-center my-2">
        <a href="{{ route('campaign.create.step.one') }}" class="btn btn-sm fw-bold btn-primary">New Campaign</a>
    </div>
    <!--end::Controls-->
</div>
<!--end::Toolbar-->
<!--begin::Row-->
<div class="row g-6 g-xl-9">
    <!--begin::Col-->

    @forelse ($campaign as $item)
    <div class="col-md-6 col-xl-4">
        <!--begin::Card-->
        <a href="{{ route('campaign.show', $item->id) }}" class="card border-hover-primary">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-9">
                <div class="fs-3 fw-bold text-dark">{{ $item->campaign_name }}</div>
            </div>
            <div class="card-body ms-5">
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-2">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">{{ $item->client_name }}</div>
                        <div class="fw-semibold text-gray-400">Nama Client</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::Budget-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">{{ $item->created_at->locale('id')->Format('d, M Y') }}</div>
                        <div class="fw-semibold text-gray-400">Budget</div>
                    </div>
                <!--end::Budget-->
                </div>
                <div class="d-flex flex-wrap mb-2">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2022</div>
                        <div class="fw-semibold text-gray-400">Due Date</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::Budget-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
                        <div class="fw-semibold text-gray-400">Date</div>
                    </div>
                    <!--end::Budget-->
                </div>
                <div class="d-flex flex-wrap mb-2">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2022</div>
                        <div class="fw-semibold text-gray-400">Due Date</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::Budget-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
                        <div class="fw-semibold text-gray-400">Budget</div>
                    </div>
                    <!--end::Budget-->
                </div>
                <!--end::Info-->
            </div>
            <!--end:: Card body-->
        </a>
        <!--end::Card-->
    </div>
    @empty
    <div class="col-md-6 col-xl-4">
        <!--begin::Card-->
        <div  class="card border-hover-primary">
            <!--begin:: Card body-->
            <div class="card-body p-20">
                <p class="text-gray-400 fw-semibold fs-5 mt-7 mb-7" style="text-align: center">Data Kosong</p>
                <!--end::Description-->
            </div>
            <!--end:: Card body-->
        </div>
        <!--end::Card-->
    </div>
    @endforelse
</div>
<!--end::Row-->

@endsection
