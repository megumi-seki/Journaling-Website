<x-app-layout mainMergin="mtb-small" pageTitle="Everyone's Journals">
    <form action="{{ route('verification.send') }}" method="POST"
        class="auth-form">
        @csrf
        <div class="form-group mtb-small font-small">
            <h2 class="title">Verify Your Email Address</h2>
            <p class="mtb-smaller">Before proceeding, please check your email for a verification link.
            If you did not receive the email,</p>
            <button class="primary-btn mtb-smaller">Please click here to request another link</button>
        </div>
    </form>
</x-app-layout>