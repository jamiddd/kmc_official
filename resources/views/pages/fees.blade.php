@extends('layouts.app')

@section('content')
<style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }
</style>
<div id="form-card-background"></div>
<main>
    <div class="div-container" style="margin-bottom: 100px;">
        <div class="card base-card white z-depth-5">
            <div class="card-content">
                <span style="font-family: 'Bebas Neue', cursive; font-size:3.4rem; line-height:3.4rem;">Fee Structure</span>
            </div>
        </div>
        <div class="card z-depth-5">
            <div class="card-content">
                <span class="pink-text text-accent-3" style="font-family: 'Bebas Neue', cursive; font-size:2.4rem; line-height:2.4rem;">Science</span>
                <table>
                    <thead>
                      <tr>
                          <th>Admission Fees (One Time)</th>
                          <th>Monthly Tuition Fee</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Rs. 10,000/-</td>
                        <td>Rs. 1,000/-</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="card z-depth-5">
            <div class="card-content">
                <span class="pink-text text-accent-3" style="font-family: 'Bebas Neue', cursive; font-size:2.4rem; line-height:2.4rem;">Commerce and Arts</span>
                <table>
                    <thead>
                      <tr>
                          <th>Admission Fees (One Time)</th>
                          <th>Monthly Tuition Fee</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Rs. 8,000/-</td>
                        <td>Rs. 800/-</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="card z-depth-5">
            <div class="card-content">
                <span class="pink-text text-accent-3" style="font-family: 'Bebas Neue', cursive; font-size:2.4rem; line-height:2.4rem;">Hosteller</span>
                <table>
                    <thead>
                      <tr>
                          <th>Hostel Admission Fees (One Time)</th>
                          <th>Monthly lodgin and fooding Fee</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Rs. 10,000/-</td>
                        <td>Rs. 5,000/-</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</main>

<script>

</script>
@endsection
