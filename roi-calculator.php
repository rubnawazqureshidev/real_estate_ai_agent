<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROI Calculator - Real Estate AI Agent</title>
    <meta name="description" content="Calculate the return on investment for implementing our AI Agent in your real estate business.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <span class="logo-icon">🤖</span>
                    <span class="logo-text">Real Estate AI Agent</span>
                </div>
                <a href="landing-page.php" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero roi-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Calculate Your ROI</h1>
                <p class="hero-subtitle">Discover how much revenue you can generate and costs you can save with our AI Agent</p>
            </div>
        </div>
    </section>

    <!-- ROI Calculator Section -->
    <section class="roi-calculator">
        <div class="container">
            <!-- Instructions -->
            <div class="roi-intro">
                <h2>How It Works</h2>
                <p>Enter your agency's current metrics below, and we'll show you the potential financial impact of implementing our AI Agent. The calculator uses conservative estimates based on real-world results.</p>
            </div>

            <!-- Calculator Form -->
            <div class="roi-calculator-wrapper">
                <form id="roiForm" class="roi-form">
                    <!-- Section 1: Client-Provided Inputs -->
                    <div class="roi-section">
                        <h3 class="roi-section-title">📊 Your Current Metrics</h3>
                        <p class="roi-section-desc">Tell us about your agency's current performance</p>

                        <div class="roi-form-row">
                            <div class="roi-input-group">
                                <label for="monthlyLeads">
                                    Monthly Lead Volume
                                    <span class="tooltip">ℹ️
                                        <span class="tooltip-text">Total number of inquiries (website forms, calls, chats) received per month</span>
                                    </span>
                                </label>
                                <input type="number" id="monthlyLeads" name="monthlyLeads" placeholder="e.g., 500" min="0" required>
                            </div>

                            <div class="roi-input-group">
                                <label for="conversionRate">
                                    Current Conversion Rate (%)
                                    <span class="tooltip">ℹ️
                                        <span class="tooltip-text">Percentage of leads that become paying clients</span>
                                    </span>
                                </label>
                                <input type="number" id="conversionRate" name="conversionRate" placeholder="e.g., 2.0" min="0" max="100" step="0.1" required>
                            </div>
                        </div>

                        <div class="roi-form-row">
                            <div class="roi-input-group">
                                <label for="avgCommission">
                                    Average Gross Commission per Client ($)
                                    <span class="tooltip">ℹ️
                                        <span class="tooltip-text">Average commission earned per closed deal</span>
                                    </span>
                                </label>
                                <input type="number" id="avgCommission" name="avgCommission" placeholder="e.g., 7500" min="0" required>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: AI Agent Impact Metrics -->
                    <div class="roi-section">
                        <h3 class="roi-section-title">🚀 AI Agent Impact</h3>
                        <p class="roi-section-desc">Conservative estimates of how the AI will improve your operations</p>

                        <div class="roi-form-row">
                            <div class="roi-input-group">
                                <label for="aiConversionIncrease">
                                    Estimated Conversion Rate Increase (%)
                                    <span class="tooltip">ℹ️
                                        <span class="tooltip-text">Conservative increase due to 24/7 service and better qualification</span>
                                    </span>
                                </label>
                                <input type="number" id="aiConversionIncrease" name="aiConversionIncrease" value="1.0" min="0" max="100" step="0.1" required>
                            </div>

                            <div class="roi-input-group">
                                <label for="timeSavedPerLead">
                                    Time Saved Per Lead (minutes)
                                    <span class="tooltip">ℹ️
                                        <span class="tooltip-text">Time an agent spends qualifying, answering questions, or scheduling per lead</span>
                                    </span>
                                </label>
                                <input type="number" id="timeSavedPerLead" name="timeSavedPerLead" value="15" min="0" required>
                            </div>
                        </div>

                        <div class="roi-form-row">
                            <div class="roi-input-group">
                                <label for="agentHourlyCost">
                                    Agent's Hourly Operating Cost ($)
                                    <span class="tooltip">ℹ️
                                        <span class="tooltip-text">What it costs your agency (salary + overhead) per hour</span>
                                    </span>
                                </label>
                                <input type="number" id="agentHourlyCost" name="agentHourlyCost" value="30" min="0" required>
                            </div>

                            <div class="roi-input-group">
                                <label for="subscriptionCost">
                                    Monthly Subscription Cost ($)
                                    <span class="tooltip">ℹ️
                                        <span class="tooltip-text">Our AI Agent monthly subscription fee</span>
                                    </span>
                                </label>
                                <input type="number" id="subscriptionCost" name="subscriptionCost" value="499" min="0" required>
                            </div>
                        </div>
                    </div>

                    <!-- Calculate Button -->
                    <div class="roi-button-wrapper">
                        <button type="button" id="calculateBtn" class="btn btn-primary btn-large">Calculate My ROI</button>
                    </div>
                </form>

                <!-- Results Section -->
                <div id="roiResults" class="roi-results" style="display: none;">
                    <h3 class="roi-results-title">Your Potential ROI</h3>

                    <!-- Step 1: Increased Revenue -->
                    <div class="roi-result-card highlight-card">
                        <div class="roi-card-header">
                            <span class="roi-card-icon">💰</span>
                            <h4>Step 1: Increased Revenue from Better Conversions</h4>
                        </div>
                        <div class="roi-card-content">
                            <div class="roi-metric">
                                <span class="roi-metric-label">Incremental Deals per Month:</span>
                                <span class="roi-metric-value" id="incrementalDeals">-</span>
                            </div>
                            <div class="roi-metric">
                                <span class="roi-metric-label">Current Conversion Rate:</span>
                                <span class="roi-metric-value" id="currentConversionDisplay">-</span>
                            </div>
                            <div class="roi-metric">
                                <span class="roi-metric-label">New Conversion Rate:</span>
                                <span class="roi-metric-value highlight" id="newConversionRate">-</span>
                            </div>
                            <div class="roi-metric-result">
                                <span class="roi-metric-label">Additional Monthly Revenue:</span>
                                <span class="roi-metric-value highlight-large" id="incrementalRevenue">$0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Cost Savings -->
                    <div class="roi-result-card">
                        <div class="roi-card-header">
                            <span class="roi-card-icon">⏱️</span>
                            <h4>Step 2: Operational Cost Savings</h4>
                        </div>
                        <div class="roi-card-content">
                            <div class="roi-metric">
                                <span class="roi-metric-label">Time Saved per Month:</span>
                                <span class="roi-metric-value" id="timeSavedHours">-</span>
                            </div>
                            <div class="roi-metric-result">
                                <span class="roi-metric-label">Monthly Cost Savings:</span>
                                <span class="roi-metric-value highlight-large" id="costSavings">$0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Total ROI -->
                    <div class="roi-result-card total-roi-card">
                        <div class="roi-card-header">
                            <span class="roi-card-icon">📈</span>
                            <h4>Step 3: Your Total ROI</h4>
                        </div>
                        <div class="roi-card-content">
                            <div class="roi-metric">
                                <span class="roi-metric-label">Additional Revenue:</span>
                                <span class="roi-metric-value" id="totalRevenue">$0</span>
                            </div>
                            <div class="roi-metric">
                                <span class="roi-metric-label">Cost Savings:</span>
                                <span class="roi-metric-value" id="totalSavings">$0</span>
                            </div>
                            <div class="roi-metric">
                                <span class="roi-metric-label">Monthly Subscription Cost:</span>
                                <span class="roi-metric-value" id="subscriptionDisplay">$0</span>
                            </div>
                            <hr class="roi-divider">
                            <div class="roi-metric-result total">
                                <span class="roi-metric-label">Total Monthly Benefit:</span>
                                <span class="roi-metric-value highlight-large" id="totalBenefit">$0</span>
                            </div>
                            <div class="roi-metric-result total">
                                <span class="roi-metric-label">Net Monthly ROI:</span>
                                <span class="roi-metric-value highlight-success" id="netROI">$0</span>
                            </div>
                            <div class="roi-metric-result total">
                                <span class="roi-metric-label">Annual ROI:</span>
                                <span class="roi-metric-value highlight-success-large" id="annualROI">$0</span>
                            </div>
                            <div class="roi-percentage">
                                <span class="roi-percentage-label">Return on Investment:</span>
                                <span class="roi-percentage-value" id="roiPercentage">0%</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA After Results -->
                    <div class="roi-cta">
                        <p class="roi-cta-text">Ready to unlock this potential for your business?</p>
                        <a href="landing-page.php#contact" class="btn btn-primary btn-large">Get Started Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Real Estate AI Agent. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript for ROI Calculations -->
    <script>
        // Wait for DOM to be ready
        document.addEventListener('DOMContentLoaded', function() {
            const calculateBtn = document.getElementById('calculateBtn');
            const roiResults = document.getElementById('roiResults');
            const roiForm = document.getElementById('roiForm');

            // Format currency
            function formatCurrency(value) {
                return '$' + Math.round(value).toLocaleString('en-US');
            }

            // Format percentage
            function formatPercentage(value) {
                return value.toFixed(1) + '%';
            }

            // Calculate ROI
            function calculateROI() {
                // Get form values
                const monthlyLeads = parseFloat(document.getElementById('monthlyLeads').value) || 0;
                const conversionRate = parseFloat(document.getElementById('conversionRate').value) || 0;
                const avgCommission = parseFloat(document.getElementById('avgCommission').value) || 0;
                const aiConversionIncrease = parseFloat(document.getElementById('aiConversionIncrease').value) || 0;
                const timeSavedPerLead = parseFloat(document.getElementById('timeSavedPerLead').value) || 0;
                const agentHourlyCost = parseFloat(document.getElementById('agentHourlyCost').value) || 0;
                const subscriptionCost = parseFloat(document.getElementById('subscriptionCost').value) || 0;

                // Validate inputs
                if (monthlyLeads <= 0 || avgCommission <= 0) {
                    alert('Please fill in all required fields with valid values.');
                    return;
                }

                // Step 1: Increased Revenue from Better Conversions
                const incrementalDeals = (monthlyLeads * aiConversionIncrease) / 100;
                const incrementalRevenue = incrementalDeals * avgCommission;
                const newConversionRate = conversionRate + aiConversionIncrease;

                // Step 2: Operational Cost Savings
                const timeSavedMinutes = monthlyLeads * timeSavedPerLead;
                const timeSavedHours = timeSavedMinutes / 60;
                const costSavings = timeSavedHours * agentHourlyCost;

                // Step 3: Total ROI
                const totalBenefit = incrementalRevenue + costSavings;
                const netROI = totalBenefit - subscriptionCost;
                const annualROI = netROI * 12;
                const roiPercentage = subscriptionCost > 0 ? ((netROI / subscriptionCost) * 100) : 0;

                // Update Results
                document.getElementById('incrementalDeals').textContent = incrementalDeals.toFixed(1);
                document.getElementById('currentConversionDisplay').textContent = formatPercentage(conversionRate);
                document.getElementById('newConversionRate').textContent = formatPercentage(newConversionRate);
                document.getElementById('incrementalRevenue').textContent = formatCurrency(incrementalRevenue);

                document.getElementById('timeSavedHours').textContent = timeSavedHours.toFixed(1) + ' hours';
                document.getElementById('costSavings').textContent = formatCurrency(costSavings);

                document.getElementById('totalRevenue').textContent = formatCurrency(incrementalRevenue);
                document.getElementById('totalSavings').textContent = formatCurrency(costSavings);
                document.getElementById('subscriptionDisplay').textContent = formatCurrency(subscriptionCost);
                document.getElementById('totalBenefit').textContent = formatCurrency(totalBenefit);
                document.getElementById('netROI').textContent = formatCurrency(netROI);
                document.getElementById('annualROI').textContent = formatCurrency(annualROI);
                document.getElementById('roiPercentage').textContent = roiPercentage.toFixed(0) + '%';

                // Show results with smooth scroll
                roiResults.style.display = 'block';
                setTimeout(function() {
                    roiResults.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            }

            // Event listener for calculate button
            calculateBtn.addEventListener('click', function(e) {
                e.preventDefault();
                calculateROI();
            });

            // Allow Enter key to trigger calculation
            roiForm.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    calculateROI();
                }
            });

            // Real-time calculation on input change (optional)
            const inputs = roiForm.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    if (roiResults.style.display === 'block') {
                        calculateROI();
                    }
                });
            });
        });
    </script>
</body>
</html>
