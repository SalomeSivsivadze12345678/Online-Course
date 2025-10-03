<?php
// data.php

/**
 * Pricing Plans
 */
$pricing_plans = [
  [
    'id' => 'free',
    'title' => 'Free Plan',
    'price' => '$0',
    'billing' => '/month',
    'description' => 'Available Features',
    'features' => [
      ['text' => 'Access to selected free courses.', 'available' => true],
      ['text' => 'Limited course materials and resources.', 'available' => true],
      ['text' => 'Basic community support.', 'available' => true],
      ['text' => 'No certification upon completion.', 'available' => true],
      ['text' => 'Ad-supported platform.', 'available' => true],
      ['text' => 'Access to exclusive Pro Plan community forums.', 'available' => false],
      ['text' => 'Early access to new courses and updates.', 'available' => false],
    ],
    'button_text' => 'Get Started',
    'highlight' => false,
  ],
  [
    'id' => 'pro',
    'title' => 'Pro Plus',
    'price' => '$79',
    'billing' => '/month',
    'description' => 'Available Features',
    'features' => [
      ['text' => 'Unlimited access to all courses.', 'available' => true],
      ['text' => 'Unlimited course materials and resources.', 'available' => true],
      ['text' => 'Priority support from instructors.', 'available' => true],
      ['text' => 'Course completion certificates.', 'available' => true],
      ['text' => 'Ad-free experience.', 'available' => true],
      ['text' => 'Access to exclusive Pro Plan community forums.', 'available' => true],
      ['text' => 'Early access to new courses and updates.', 'available' => true],
    ],
    'button_text' => 'Get Started',
    'highlight' => true,
  ],
];

/**
 * FAQs
 */
$faqs = [
  [
    'question' => 'Can I enroll in multiple courses at once?',
    'answer'   => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
    'link'     => '#',
    'link_text'=> 'Enrollment Process for Different Courses',
  ],
  [
    'question' => 'What kind of support can I expect from instructors?',
    'answer'   => '',
  ],
  [
    'question' => 'Are the courses self-paced or do they have specific start and end dates?',
    'answer'   => '',
  ],
  [
    'question' => 'Are there any prerequisites for the courses?',
    'answer'   => '',
  ],
  [
    'question' => 'Can I download the course materials for offline access?',
    'answer'   => '',
  ],
];

return [
  'plans' => $pricing_plans,
  'faqs'  => $faqs,
];