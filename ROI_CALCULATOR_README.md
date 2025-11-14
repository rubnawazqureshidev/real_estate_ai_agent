# ROI Calculator - Real Estate AI Agent

## Overview

The ROI Calculator is a powerful sales tool that demonstrates the financial benefit of implementing the Real Estate AI Agent by contrasting the cost of the solution with the potential revenue gained and costs saved.

## File Structure

- `roi-calculator.php` - Main calculator page with form inputs and results display
- `style.css` - Contains all ROI-specific styles (lines 559-1049)
- `landing-page.php` - Updated to include link to ROI Calculator

## Features

### 1. Client-Provided Inputs (Agency's Current Metrics)

The calculator collects three simple metrics:

- **A. Monthly Lead Volume**: Total number of inquiries (website forms, calls, chats) received per month
- **B. Current Lead-to-Client Conversion Rate**: Percentage of leads that become paying clients
- **C. Average Gross Commission per Client**: Average commission earned per closed deal

### 2. AI Agent Impact Metrics

Conservative, measurable benefits the AI Agent provides:

- **D. Estimated AI Conversion Rate Increase**: Conservative increase due to 24/7 service and better qualification (default: 1.0%)
- **E. Time Saved Per Lead**: Average time an agent spends qualifying, answering questions, or scheduling (default: 15 minutes)
- **F. Agent's Hourly Operating Cost**: Agency cost for an agent's time including salary and overhead (default: $30/hour)
- **Subscription Cost**: Monthly AI Agent subscription fee (default: $499)

### 3. ROI Calculation Steps

#### Step 1: Increased Revenue from Better Conversions

```
Incremental Deals = (Monthly Leads × AI Conversion Rate Increase%) / 100
Incremental Revenue = Incremental Deals × Average Commission
New Conversion Rate = Current Rate + AI Conversion Rate Increase
```

**Example**: 500 leads × 1.0% = 5 extra deals × $7,500 = **$37,500/month**

#### Step 2: Operational Cost Savings (Time Reclaimed)

```
Time Saved (Minutes) = Monthly Leads × Time Saved Per Lead
Time Saved (Hours) = Time Saved (Minutes) / 60
Monthly Cost Savings = Time Saved (Hours) × Agent Hourly Cost
```

**Example**: 500 leads × 15 mins = 7,500 mins = 125 hours × $30 = **$3,750/month**

#### Step 3: Total ROI

```
Total Monthly Benefit = Incremental Revenue + Monthly Cost Savings
Net Monthly ROI = Total Monthly Benefit - Subscription Cost
Annual ROI = Net Monthly ROI × 12
ROI Percentage = (Net ROI / Subscription Cost) × 100
```

**Example**: ($37,500 + $3,750) - $499 = **$40,751 Net Monthly ROI**
Annual: $40,751 × 12 = **$489,012**

## Design Features

### Responsive Design

- **Desktop**: Full two-column form layout
- **Tablet (≤768px)**: Single column layout, adjusted typography
- **Mobile (≤480px)**: Optimized spacing and tooltips

### Interactive Elements

- **Tooltips**: Hover over info icons (ℹ️) for detailed explanations
- **Real-time Calculations**: Results update as you modify inputs (after initial calculation)
- **Smooth Scrolling**: Automatic scroll to results after calculation
- **Input Validation**: Ensures all required fields are filled with valid values

### Visual Hierarchy

- **Highlight Cards**: Orange gradient for revenue impact
- **Success Cards**: Green gradient for total ROI
- **Color Coding**: Different sizes and colors for metric importance
- **Icons**: Emoji icons for visual engagement (💰, ⏱️, 📈)

## Usage

### Integration with Landing Page

The calculator is linked from the landing page hero section:

```html
<a href="roi-calculator.php" class="btn btn-secondary">Calculate Your ROI</a>
```

### Direct Access

Navigate to: `roi-calculator.php`

### Navigation

- **Back to Home** button in the navigation bar returns users to the landing page
- **Get Started Today** CTA button in results directs to contact form

## Technical Implementation

### JavaScript Functions

- `formatCurrency(value)`: Formats numbers as USD currency
- `formatPercentage(value)`: Formats numbers as percentages with 1 decimal place
- `calculateROI()`: Main calculation function that processes all inputs and updates results

### Event Listeners

- **Calculate Button**: Triggers ROI calculation
- **Enter Key**: Allows form submission via keyboard
- **Input Changes**: Updates results in real-time after initial calculation

### CSS Classes

Key CSS classes for customization:

- `.roi-calculator`: Main section container
- `.roi-form`: Form styling and layout
- `.roi-result-card`: Result card containers
- `.roi-metric`: Individual metric rows
- `.highlight-card`: Revenue impact card
- `.total-roi-card`: Final ROI summary card

## Customization

### Changing Default Values

Edit these lines in `roi-calculator.php`:

```html
<!-- Line 95: AI Conversion Increase -->
<input type="number" id="aiConversionIncrease" value="1.0" ...>

<!-- Line 106: Time Saved Per Lead -->
<input type="number" id="timeSavedPerLead" value="15" ...>

<!-- Line 117: Agent Hourly Cost -->
<input type="number" id="agentHourlyCost" value="30" ...>

<!-- Line 128: Subscription Cost -->
<input type="number" id="subscriptionCost" value="499" ...>
```

### Styling Modifications

All ROI-specific styles are in `style.css` starting at line 559. Modify:

- **Colors**: Update CSS variables in `:root`
- **Spacing**: Adjust padding and margins
- **Typography**: Change font sizes and weights
- **Breakpoints**: Modify responsive behavior

## Browser Compatibility

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## Performance

- No external dependencies (except Google Fonts)
- Vanilla JavaScript (no frameworks)
- Fast load time (~18KB HTML + ~19KB CSS)
- Instant calculations (client-side)

## Future Enhancements

Potential improvements:

1. **PDF Export**: Allow users to download ROI report as PDF
2. **Email Results**: Send calculation summary via email
3. **Comparison Mode**: Compare multiple scenarios side-by-side
4. **Industry Benchmarks**: Show how results compare to industry averages
5. **Custom Branding**: Agency-specific colors and logos
6. **Multi-currency**: Support for different currencies
7. **Save/Load**: Save calculations for later reference
8. **Charts**: Visual graphs of ROI breakdown

## Support

For questions or issues with the ROI Calculator, refer to the main project documentation or contact support.

---

**Version**: 1.0
**Last Updated**: November 2024
**Author**: Real Estate AI Agent Team
