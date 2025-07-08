<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Referral</title>

    @extends('layouts.app')
</head>

<body>

    <div class="global-container d-flex flex-column align-items-center">

         @include('layouts.navbar')
            @include('layouts.sidebar')


        <div class="pages-row d-flex flex-column p-2 mt-2 mb-3 px-3 mb-4  w-100 align-items-center justify-content-center rounded">

            <div class="invite-box-wrapper rounded-1 w-100 p-2">

                <div class="invite-link-box d-flex align-items-center  mt-3 gap-1">
                    <input class="invite-link-input p-2 px-3  rounded-1" type="text"
                        value="https://referral/Frank234" disabled>
                    <button type="button" class="invite-link-copy-btn btn">
                        <i class='bx  bx-copy'></i>
                    </button>
                </div>

                <div class="invite-social-wrapper d-flex p-3 gap-2 align-items-center justify-content-center">
                    <p class="m-0">Invite via:</p>
                    <div class="invite-social-icon-wrapper d-flex align-items-center gap-3">
                        <a href="#">
                            <i class='bx bxl-whatsapp rounded-1 text-success'></i>
                        </a>
                        <a href="#">
                            <i class='bx bxl-facebook rounded-1 text-primary'></i>
                        </a>
                        <a href="#">
                            <i class='bx bxl-twitter rounded-1 text-info'></i>
                        </a>
                        <a href="#">
                            <i class='bx bxl-instagram rounded-1 text-danger'></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="invited-users-wrapper d-flex rounded-1  p-3 align-items-center justify-content-center w-100 gap-2 mt-3 ">
                <div class="invited-users-item flex-wrap gap-3 p-2 rounded-1 d-flex">
                    <i class='bx  bx-wallet'></i>
                    <div class="invitee-item2">
                        <p class="m-0">Points reward</p>
                        <h4 class="m-0">100k</h4>
                    </div>
                </div>
                <div class="invited-users-item d-flex flex-wrap align-items-center gap-3 p-2 rounded">
                    <i class='bx  bx-group'></i>
                     <div class="invitee-item2">
                         <p class="mb-0">Friends Invited</p>
                         <h4 class="mb-0 ">100</span> </h4>
                    </div>

                </div>
            </div>


            <div class="invite-how-it-work-wrapper w-100 rounded-1 mt-3 p-3">
                <p class="m-0 by-proceeding-text">By proceeding, I agree to the Referral Terms and understand that
                    anyone with my invite
                    link will know that I use Xingtask.</p>

                <h4 class="mt-5 how-it-works-header-text">How it works</h4>

                <ol class="list-group list-group-numbered mt-3 gap-3">
                    <li class="list-group-item m-0 p-0">Upgrade your account.
                        <p class="px-3 m-0">Only users with upgraded accounts can invite and earn rewards. Free users
                            can invite but won’t receive any earnings.</p>
                    </li>
                    <li class="list-group-item m-0 p-0">Share your invite link
                        <p class="px-3 m-0">Invite friends who don’t use Xingtask yet. They must sign up using your
                            unique referral link.</p>
                    </li>
                    <li class="list-group-item m-0 p-0">Earn rewards
                        <p class="px-3 m-0">When someone you invite upgrades their account or completes an eligible
                            task, you earn 10% automatically.</p>
                    </li>
                    <li class="list-group-item m-0 p-0">Track your invites.
                        <p class="px-3 m-0">Use the table below to see who you’ve invited, their status, and what they
                            have earned.</p>
                    </li>

                </ol>

            </div>


            {{-- INVITEES TABLE --}}
            <div class="invitee-table-wrapper border-0 mt-3 mb-3 w-100 p-3 rounded-1">
                <h4 class="invitee-table-friends-text">Friends</h4>
                <table class="table table-striped border-0 table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Earning</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider border-0">
                        <tr>
                            <td>1</td>
                            <td class="table-email">mark***@gmail.com</td>
                            <td class="text-success">Active</td>
                            <td>$10,000.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacofb***@gmail.com</td>
                            <td>Inactive</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John***@gmail.com</td>
                            <td>suspended</td>
                            <td>$30,000.00</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Vic***@gmail.com</td>
                            <td>Banned</td>
                            <td>$0.00</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>



            {{-- @include('layouts.footer-copyright') --}}



    </div>

</body>

</html>
