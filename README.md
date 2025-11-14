# Real Estate AI Agent Landing Page

A professional, responsive landing page built with PHP and CSS for promoting your Real Estate AI Agent service.

## Files Included

- **landing-page.php** - Main landing page with all sections
- **style.css** - Complete stylesheet with responsive design
- **process-form.php** - Form submission handler
- **thank-you.php** - Thank you page after form submission
- **submissions.log** - Auto-generated file for storing form submissions

## Features

### Design Features
- Modern, professional design with gradient hero section
- Fully responsive layout (mobile, tablet, desktop)
- Smooth scrolling navigation
- Animated sections and hover effects
- Professional color scheme optimized for real estate
- Inter font family for clean typography

### Content Sections
1. **Hero Section** - Eye-catching headline with CTAs
2. **Challenge Section** - Identifies pain points
3. **Solution Section** - 4 key use cases with icons
4. **Features Section** - Benefits table with detailed explanations
5. **Testimonial** - Social proof quote
6. **Contact Form** - Lead capture with validation
7. **Thank You Page** - Post-submission confirmation

### Form Features
- Client-side form validation
- Server-side input sanitization
- Multiple storage options (file, email, database)
- Redirect to thank you page
- Error handling

## Installation

### Requirements
- PHP 7.0 or higher
- Web server (Apache, Nginx, etc.)
- Write permissions for the directory (for submissions.log)

### Quick Setup

1. **Upload files to your web server:**
   ```bash
   - landing-page.php
   - style.css
   - process-form.php
   - thank-you.php
   ```

2. **Set file permissions:**
   ```bash
   chmod 644 landing-page.php
   chmod 644 style.css
   chmod 644 process-form.php
   chmod 644 thank-you.php
   chmod 666 submissions.log (will be created automatically)
   ```

3. **Access the landing page:**
   ```
   http://yourdomain.com/landing-page.php
   ```

## Configuration

### Email Notifications

To enable email notifications, edit `process-form.php`:

```php
// Line 79: Change to your email address
$to = 'your-email@example.com';

// Line 94: Uncomment this line to enable
mail($to, $subject, $email_body, $headers);
```

### Database Storage

To save submissions to a database:

1. Create the database table:
```sql
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    agency VARCHAR(255),
    message TEXT,
    submitted_at DATETIME NOT NULL,
    ip_address VARCHAR(45),
    INDEX idx_email (email),
    INDEX idx_submitted_at (submitted_at)
);
```

2. Uncomment and configure the database section in `process-form.php` (lines 99-122)

3. Update database credentials:
```php
$pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
```

## Customization

### Colors

Edit CSS variables in `style.css` (lines 14-25):

```css
:root {
    --primary-color: #2563eb;      /* Main blue */
    --primary-dark: #1e40af;       /* Darker blue */
    --accent-color: #f59e0b;       /* Orange accent */
    --text-dark: #1e293b;          /* Dark text */
    --text-light: #64748b;         /* Light text */
    /* ... more variables */
}
```

### Content

Edit content directly in `landing-page.php`:
- Hero headline (line 23)
- Section text (throughout the file)
- Form fields (lines 125-156)

### Styling

Modify `style.css` to adjust:
- Typography (lines 37-62)
- Spacing (padding/margin in each section)
- Animations (lines 609-627)
- Responsive breakpoints (lines 567-607)

## Form Submission Options

The form processor supports three storage methods:

### 1. File Storage (Default)
- Submissions saved to `submissions.log`
- Simple, no setup required
- View submissions: `cat submissions.log`

### 2. Email Notifications
- Sends email for each submission
- Configure in `process-form.php` (lines 75-94)
- Requires working mail server

### 3. Database Storage
- Most robust solution
- Configure in `process-form.php` (lines 99-122)
- Requires MySQL/MariaDB

## Testing

### Local Testing with PHP Built-in Server

```bash
# Navigate to the directory
cd /path/to/landing-page

# Start PHP server
php -S localhost:8000

# Open in browser
open http://localhost:8000/landing-page.php
```

### Test Form Submission

1. Fill out the contact form
2. Submit
3. Check `submissions.log` for the entry
4. Verify redirect to thank-you.php

## Browser Compatibility

Tested and working on:
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance

- Page weight: ~50KB (HTML + CSS)
- No external dependencies except Google Fonts
- Optimized CSS with minimal animations
- Fast load times

## Security Features

- Input sanitization
- Email validation
- CSRF protection ready (add token if needed)
- XSS prevention
- SQL injection prevention (prepared statements)
- IP address logging

## Troubleshooting

### Form not submitting
- Check file permissions on process-form.php (should be 644)
- Verify PHP is working: create test.php with `<?php phpinfo(); ?>`
- Check error logs: `tail -f /var/log/apache2/error.log`

### Emails not sending
- Check mail server configuration
- Test PHP mail: `php -r "mail('test@example.com', 'Test', 'Body');"`
- Consider using SMTP library (PHPMailer)

### Styling issues
- Clear browser cache
- Check style.css is loading (View Source)
- Verify CSS file path in landing-page.php

## Future Enhancements

Consider adding:
- reCAPTCHA for spam protection
- Calendar integration for booking
- Live chat widget integration
- Analytics tracking (Google Analytics)
- A/B testing variants
- Multi-language support
- Video demo section
- Client testimonials slider
- Pricing section
- FAQ accordion

## Support

For issues or questions:
1. Check the troubleshooting section
2. Review PHP error logs
3. Test with PHP built-in server
4. Verify file permissions

## License

This landing page template is free to use and modify for your real estate business.

---

**Version:** 1.0
**Last Updated:** 2025
**Author:** Real Estate AI Agent Team
