\
<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Pricing_Plans_Widget_Advanced extends \Elementor\Widget_Base {

    public function get_name() {
        return 'pricing_plans_widget_advanced';
    }

    public function get_title() {
        return __( 'Pricing Plans Widget (Advanced)', 'ppwa' );
    }

    public function get_icon() {
        return 'eicon-price-table';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function render() {
        // We preserve original HTML/CSS/JS as requested, with small responsive & functionality improvements.
        ?>
<!DOCTYPE html>
<div class="ppwa-root">
<section class="pricing-section container">
    <h2>Choose a plan for<br>you and your home</h2>
    <p class="text-muted">Pick your plan and choose the level of service that’s right for you. Keep your home in top shape with our comprehensive maintenance plans.</p>

    <!-- Toggle -->
    <div class="toggle-btn d-inline-flex my-4">
      <button class="btn active" id="annualBtn">Annual <small>(Up to 10% off)</small></button>
      <button class="btn btn-light" id="monthlyBtn">Monthly</button>
    </div>

    <div class="slider-container">
      <label for="homeSize" class="form-label">How many square feet is your home?</label>
      <input type="range" class="form-range" min="0" max="3" step="1" id="homeSize" value="0">
      <div class="slider-labels">
        <span data-item="0" class="active">0 – 1,000 sqft</span>
        <span data-item="1">1,000 – 2,500 sqft</span>
        <span data-item="2">2,500 – 5,000 sqft</span>
        <span data-item="3">5,000+ sqft</span>
      </div>
    </div>

    <!-- Pricing Cards Row -->
    <div class="plans-row mt-4">
      <!-- Gold -->
      <div class="plan-card" id="goldCard">
        <div class="plan-title">GOLD</div>
        <p class="text-muted">Seasonal home maintenance plan. 4x / year.</p>
        <div class="price" id="goldPrice">$270</div>
        <p class="text-muted" id="goldDesc">Per quarter / Billed annually</p>
        <a href="?add-to-cart=729" class="purchase-btn item-1" id="link-gold">PURCHASE PLAN</a>
        <ul class="features">
          <li>✔ 4 Seasonal Maintenance Inspections and Light Repair Work Per Year</li>
          <li>✔ Free AP Whole Home Assessment & Report ($350 Value)</li>
          <li>✔ Discounted Home Supplies</li>
        </ul>
      </div>

      <!-- Platinum -->
      <div class="plan-wrapper">
        <div class="plan-card" id="platinumCard">
          <div class="plan-title">PLATINUM</div>
          <p class="text-muted">Monthly home maintenance plan. 12x / year.</p>
          <div class="price" id="platinumPrice">$225</div>
          <p class="text-muted" id="platinumDesc">Per month / Billed annually</p>
          <a href="?add-to-cart=729" class="purchase-btn item-2" id="link-platinum">PURCHASE PLAN</a>
          <ul class="features">
            <li>✔ 12 Total Maintenance Visits Per Year</li>
            <li>✔ 4 Seasonal Maintenance Inspections</li>
            <li>✔ 8 Monthly Inspections</li>
            <li>✔ Free AP Whole Home Assessment</li>
            <li>✔ Discounted Home Supplies</li>
          </ul>
        </div>
      </div>

      <!-- Diamond -->
      <div class="plan-card" id="diamondCard">
        <div class="plan-title">DIAMOND</div>
        <p class="text-muted">All-inclusive home maintenance. 16x / year.</p>
        <div class="price" id="diamondPrice">$295</div>
        <p class="text-muted" id="diamondDesc">Per month / Billed annually</p>
        <a href="?add-to-cart=729" class="purchase-btn item-3" id="link-diamond">PURCHASE PLAN</a>
        <ul class="features">
          <li>✔ 16 Total Maintenance Visits Per Year</li>
          <li>✔ 4 Seasonal Maintenance Inspections</li>
          <li>✔ 8 Monthly Inspections</li>
          <li>✔ 4 On-Call Maintenance Visits</li>
          <li>✔ Free AP Whole Home Assessment</li>
        </ul>
      </div>
    </div>
</section>
</div>

<style>
/* Preserved original styles with improved responsive behavior */
.ppwa-root { font-family: Arial, sans-serif; }
.ppwa-root .pricing-section { padding: 40px 12px; text-align: center; }
.ppwa-root .toggle-btn .btn { border-radius: 0; font-weight: bold; padding: 10px 18px; }
.ppwa-root .toggle-btn .btn.active { background: black; color: #fff; }
.ppwa-root .plan-card {
  background: #c4f29a; border-radius: 8px; padding: 20px 16px;
  text-align: left; box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  transition: transform 0.18s ease-in-out; min-width: 260px; max-width: 380px;
  flex: 0 0 auto;
}
.ppwa-root .plan-card:hover { transform: translateY(-6px); }
.ppwa-root .plan-title { font-size: 18px; font-weight: 700; margin-bottom: 8px; }
.ppwa-root .price { font-size: 28px; font-weight: 800; margin: 12px 0; }
.ppwa-root .purchase-btn {
  background: #fff; border: none; width: 100%; padding: 10px;
  font-weight: bold; text-align: center; margin-bottom: 14px; display: block; border-radius:6px;
}
.ppwa-root .most-popular { position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: #d9534f; color: #fff; padding:3px 10px; border-radius:4px; font-size:12px; }
.ppwa-root .plan-wrapper { position: relative; flex: 0 0 auto; min-width: 260px; max-width: 380px; }
.ppwa-root .features { font-size: 14px; margin-top: 10px; padding-left: 18px; text-align: left; }
.ppwa-root .features li { margin-bottom: 8px; line-height: 1.35; }
.ppwa-root .slider-container { margin: 28px 0 18px; }
.ppwa-root .slider-labels { display: flex; justify-content: space-between; font-size: 13px; margin-top: 8px; gap: 8px; flex-wrap: wrap; }
.ppwa-root .plans-row { display: flex; gap: 18px; justify-content: center; overflow-x: auto; padding-bottom: 8px; -webkit-overflow-scrolling: touch; }
.ppwa-root .plans-row::-webkit-scrollbar { height: 8px; }
.ppwa-root .plans-row::-webkit-scrollbar-thumb { background: #888; border-radius: 4px; }
@media (max-width: 991px) {
  .ppwa-root .plans-row { flex-wrap: wrap; justify-content: center; }
  .ppwa-root .plan-card, .ppwa-root .plan-wrapper { flex: 1 1 100%; max-width: 100%; }
  .ppwa-root .slider-labels { font-size: 12px; }
}
@media (max-width: 576px) {
  .ppwa-root .pricing-section { padding: 18px 8px; }
  .ppwa-root .plan-title { font-size: 16px; text-align:center; }
  .ppwa-root .price { font-size: 22px; text-align:center; }
  .ppwa-root .purchase-btn { font-size: 14px; padding: 10px; margin: 12px auto; max-width: 220px; border-radius:8px; }
  .ppwa-root .features { font-size: 13px; padding-left: 12px; }
  .ppwa-root .slider-labels { gap:6px; font-size:11px; }
  .ppwa-root .plans-row { gap:12px; }
}
</style>

<script>
(function($){
  $(document).ready(function(){

    // === Price datasets (kept original + ability to expand) ===
    const prices = {
      annual: [
        { gold: 270, platinum: 225, diamond: 295 },
        { gold: 300, platinum: 250, diamond: 325 },
        { gold: 350, platinum: 295, diamond: 375 },
        { gold: 400, platinum: 345, diamond: 425 }
      ],
      monthly: [
        { gold: 90, platinum: 75, diamond: 100 },
        { gold: 100, platinum: 85, diamond: 115 },
        { gold: 120, platinum: 99, diamond: 130 },
        { gold: 140, platinum: 115, diamond: 150 }
      ]
    };

    // Default product mapping (you can change IDs below)
    const productMap = {
      0: { gold: 1682, platinum: 1882, diamond: 3523 },
      1: { gold: 1682, platinum: 1882, diamond: 3523 },
      2: { gold: 1682, platinum: 1882, diamond: 3523 },
      3: { gold: 1682, platinum: 1882, diamond: 3523 }
    };

    let currentMode = 'annual';
    const $homeSize = $('#homeSize');

    function updatePrices() {
      const size = parseInt($homeSize.val() || 0, 10);
      const data = prices[currentMode][size] || prices[currentMode][0];

      $('#goldPrice').text('$' + data.gold);
      $('#platinumPrice').text('$' + data.platinum);
      $('#diamondPrice').text('$' + data.diamond);

      if (currentMode === 'annual') {
        $('#goldDesc').text('Per quarter / Billed annually');
        $('#platinumDesc').text('Per month / Billed annually');
        $('#diamondDesc').text('Per month / Billed annually');
      } else {
        $('#goldDesc').text('Per quarter / Billed monthly');
        $('#platinumDesc').text('Per month / Billed monthly');
        $('#diamondDesc').text('Per month / Billed monthly');
      }

      // Update purchase links to proper add-to-cart URLs (WooCommerce style)
      const map = productMap[size] || productMap[0];
      $('#link-gold').attr('href', map.gold ? ('?add-to-cart=' + map.gold) : '#');
      $('#link-platinum').attr('href', map.platinum ? ('?add-to-cart=' + map.platinum) : '#');
      $('#link-diamond').attr('href', map.diamond ? ('?add-to-cart=' + map.diamond) : '#');
    }

    // Toggle buttons
    $('#annualBtn').on('click', function(){
      currentMode = 'annual';
      $('#annualBtn').addClass('active');
      $('#monthlyBtn').removeClass('active');
      updatePrices();
    });
    $('#monthlyBtn').on('click', function(){
      currentMode = 'monthly';
      $('#monthlyBtn').addClass('active');
      $('#annualBtn').removeClass('active');
      updatePrices();
    });

    // Slider label clicks & input
    $('.slider-labels span').on('click', function(){
      const idx = $(this).data('item');
      $homeSize.val(idx).trigger('input');
    });

    $homeSize.on('input change', function(){
      const idx = parseInt($(this).val() || 0, 10);
      $('.slider-labels span').removeClass('active');
      $('.slider-labels span[data-item="'+idx+'"]').addClass('active');
      updatePrices();
    });

    // Accessibility: keyboard support for range (left/right arrows)
    $homeSize.on('keydown', function(e){
      if(e.key === 'ArrowLeft' || e.key === 'ArrowRight'){
        // allow default; update will trigger on input event
        setTimeout(updatePrices, 0);
      }
    });

    // Init
    updatePrices();
  });
})(jQuery);
</script>
<?php
    }
}
