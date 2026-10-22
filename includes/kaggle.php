<?php
/**
 * Kaggle Section - Engr. Aamir Jamil Portfolio
 * Compact 6-per-row layout to minimize vertical height (vh).
 * Dynamic fetch with intelligent file caching and resilient fallback.
 */

function get_kaggle_datasets() {
    $cache_file = __DIR__ . '/../assets/data/kaggle_cache.json';
    $cache_ttl = 21600; // 6 hours in seconds
    $datasets = [];

    // Fallback static data in case both API and cache are unavailable
    $fallback_data = [
        [
            'title' => 'Retail Sales Dataset for Data Preprocessing',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/retail-sales-dataset-for-data-preprocessing',
            'subtitle' => 'Realistic retail sales data with 89,984 records and 23 features for clean data engineering.',
            'category' => 'eda',
            'totalBytes' => 3665563,
            'downloadCount' => 49,
            'viewCount' => 345,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['eda', 'time series', 'preprocessing'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/12659406/20864322/2fccec26bd9885848415877a3c2c8f98/dataset-thumbnail.jpg'
        ],
        [
            'title' => 'NLP Learning Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/nlp-learning-dataset',
            'subtitle' => 'A synthetic, educational collection of 15 CSV files designed to teach modern NLP.',
            'category' => 'nlp',
            'totalBytes' => 968106,
            'downloadCount' => 112,
            'viewCount' => 264,
            'voteCount' => 1,
            'licenseName' => 'CC0: Public Domain',
            'tags' => ['nlp', 'rnn', 'text pre-processing'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/11632926/18888238/61ac5309b02c6a1dacc12a0ebcb4309f/dataset-thumbnail.png'
        ],
        [
            'title' => 'House Price Prediction',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/house-price-prediction',
            'subtitle' => 'House Price dataset featuring missing values intended for data cleaning and regression modeling.',
            'category' => 'ml',
            'totalBytes' => 23282,
            'downloadCount' => 48,
            'viewCount' => 201,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['regression', 'tabular', 'machine learning'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-41.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Students Grades Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/students-dataset-grade-target-eda-ml',
            'subtitle' => 'Student academic performance metrics and demographic indicators for classification & EDA.',
            'category' => 'ml',
            'totalBytes' => 21804,
            'downloadCount' => 34,
            'viewCount' => 189,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['education', 'classification', 'eda'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-12.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Traffic Flow Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/traffic-flow-dataset',
            'subtitle' => 'Urban traffic volume, road capacity, and sensor observations for time series forecasting.',
            'category' => 'ml',
            'totalBytes' => 4542,
            'downloadCount' => 20,
            'viewCount' => 146,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['time series', 'iot', 'regression'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-85.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Employee Salary Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/employee-salary-dataset',
            'subtitle' => 'Experience, educational degree, job title, and compensation benchmarks for regression analysis.',
            'category' => 'ml',
            'totalBytes' => 11511,
            'downloadCount' => 23,
            'viewCount' => 106,
            'voteCount' => 2,
            'licenseName' => 'MIT',
            'tags' => ['salary prediction', 'hr analytics', 'regression'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-6.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Shoe Size Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/shoe-size-dataset',
            'subtitle' => 'Anthropometric measurements, body height, weight, and footwear size correlation modeling.',
            'category' => 'eda',
            'totalBytes' => 3104,
            'downloadCount' => 23,
            'viewCount' => 109,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['statistics', 'anthropometry', 'tabular'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-70.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Email Spam Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/email-spam-dataset',
            'subtitle' => 'Curated text corpus of ham and spam messages for NLP feature extraction and Naive Bayes models.',
            'category' => 'nlp',
            'totalBytes' => 12766,
            'downloadCount' => 12,
            'viewCount' => 93,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['nlp', 'spam detection', 'tf-idf'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-34.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Heart Disease Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/heart-disease-dataset',
            'subtitle' => 'Clinical diagnostic attributes, patient biomarkers, and cardiac health risk classification.',
            'category' => 'ml',
            'totalBytes' => 21153,
            'downloadCount' => 14,
            'viewCount' => 81,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['cardiology', 'classification', 'healthcare'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-52.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Loan Approval Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/loan-apporval-dataset',
            'subtitle' => 'Applicant credit score, income, collateral, and loan qualification risk assessment.',
            'category' => 'finance',
            'totalBytes' => 18544,
            'downloadCount' => 18,
            'viewCount' => 67,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['finance', 'credit risk', 'banking'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-64.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Bank Churn Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/bank-churn-dataset',
            'subtitle' => 'Customer demographic, tenure, account activity, and retention/churn probability data.',
            'category' => 'finance',
            'totalBytes' => 21268,
            'downloadCount' => 11,
            'viewCount' => 63,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['customer churn', 'banking', 'retention'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-23.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Car Price Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/car-price-datset',
            'subtitle' => 'Automotive specifications, mileage, engine capacity, and market resale value estimation.',
            'category' => 'ml',
            'totalBytes' => 34055,
            'downloadCount' => 11,
            'viewCount' => 59,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['automotive', 'price prediction', 'tabular'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-92.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Credit Card Fraud Detection',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/credit-card-fraud-detection',
            'subtitle' => 'Financial transaction attributes for anomaly detection, fraud identification, and imbalanced learning.',
            'category' => 'finance',
            'totalBytes' => 82939,
            'downloadCount' => 12,
            'viewCount' => 57,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['fraud detection', 'anomaly detection', 'finance'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-18.png-21622007/dataset-thumbnail.png'
        ],
        [
            'title' => 'Customer Segmentation Dataset',
            'url' => 'https://www.kaggle.com/datasets/engraamirjamil/customer-segmentation-dataset',
            'subtitle' => 'Customer annual spending, age, purchase patterns for K-Means clustering and persona analysis.',
            'category' => 'eda',
            'totalBytes' => 18742,
            'downloadCount' => 8,
            'viewCount' => 53,
            'voteCount' => 1,
            'licenseName' => 'MIT',
            'tags' => ['clustering', 'k-means', 'marketing'],
            'thumbnailImageUrl' => 'https://storage.googleapis.com/kaggle-datasets-images/new-version-temp-images/default-backgrounds-77.png-21622007/dataset-thumbnail.png'
        ]
    ];

    $cache_dir = dirname($cache_file);
    if (!is_dir($cache_dir)) {
        @mkdir($cache_dir, 0777, true);
    }

    $should_refresh = false;
    if (!file_exists($cache_file) || (time() - filemtime($cache_file) > $cache_ttl)) {
        $should_refresh = true;
    }

    if ($should_refresh) {
        $api_url = 'https://www.kaggle.com/api/v1/datasets/list?user=engraamirjamil&pageSize=100';
        $ctx = stream_context_create([
            'http' => [
                'timeout' => 2.5,
                'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\nAccept: application/json\r\n"
            ]
        ]);

        $json_data = @file_get_contents($api_url, false, $ctx);
        if ($json_data) {
            $decoded = json_decode($json_data, true);
            if (is_array($decoded) && count($decoded) > 0) {
                @file_put_contents($cache_file, $json_data);
                $datasets = $decoded;
            }
        }
    }

    // If datasets is still empty, load from cache file
    if (empty($datasets) && file_exists($cache_file)) {
        $raw = @file_get_contents($cache_file);
        $decoded = json_decode($raw, true);
        if (is_array($decoded) && count($decoded) > 0) {
            $datasets = $decoded;
        }
    }

    // If still empty, use fallback
    if (empty($datasets)) {
        $datasets = $fallback_data;
    }

    $curated_categories = [
        'retail-sales-dataset-for-data-preprocessing' => 'eda',
        'nlp-learning-dataset' => 'nlp',
        'house-price-prediction' => 'ml',
        'students-dataset-grade-target-eda-ml' => 'ml',
        'traffic-flow-dataset' => 'ml',
        'employee-salary-dataset' => 'ml',
        'shoe-size-dataset' => 'eda',
        'email-spam-dataset' => 'nlp',
        'heart-disease-dataset' => 'ml',
        'loan-apporval-dataset' => 'finance',
        'bank-churn-dataset' => 'finance',
        'car-price-datset' => 'ml',
        'credit-card-fraud-detection' => 'finance',
        'customer-segmentation-dataset' => 'eda'
    ];

    $curated_tags = [
        'retail-sales-dataset-for-data-preprocessing' => ['eda', 'time series', 'sales'],
        'nlp-learning-dataset' => ['nlp', 'rnn', 'text'],
        'house-price-prediction' => ['regression', 'tabular', 'ml'],
        'students-dataset-grade-target-eda-ml' => ['education', 'grades', 'eda'],
        'traffic-flow-dataset' => ['time series', 'traffic', 'iot'],
        'employee-salary-dataset' => ['salary', 'hr analytics', 'regression'],
        'shoe-size-dataset' => ['statistics', 'height', 'tabular'],
        'email-spam-dataset' => ['nlp', 'spam', 'classification'],
        'heart-disease-dataset' => ['cardiology', 'medical ai', 'classification'],
        'loan-apporval-dataset' => ['finance', 'credit risk', 'banking'],
        'bank-churn-dataset' => ['churn', 'banking', 'retention'],
        'car-price-datset' => ['cars', 'price', 'regression'],
        'credit-card-fraud-detection' => ['fraud', 'anomaly', 'finance'],
        'customer-segmentation-dataset' => ['clustering', 'k-means', 'marketing']
    ];

    $normalized = [];
    foreach ($datasets as $item) {
        $url = $item['url'] ?? $item['urlNullable'] ?? '';
        $slug = basename(parse_url($url, PHP_URL_PATH));
        if (empty($slug)) {
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'] ?? '')));
        }

        $title = $item['title'] ?? $item['titleNullable'] ?? 'Open Dataset';
        $subtitle = $item['subtitle'] ?? $item['subtitleNullable'] ?? '';
        $cat = $item['category'] ?? ($curated_categories[$slug] ?? 'ml');

        // Extract tags
        $tags = [];
        if (!empty($item['tags']) && is_array($item['tags'])) {
            foreach ($item['tags'] as $t) {
                if (is_array($t) && !empty($t['name'])) {
                    $tags[] = $t['name'];
                } elseif (is_string($t)) {
                    $tags[] = $t;
                }
            }
        }
        if (empty($tags) && isset($curated_tags[$slug])) {
            $tags = $curated_tags[$slug];
        }
        if (empty($tags)) {
            $tags = ['ml', 'data'];
        }

        $downloads = (int)($item['downloadCount'] ?? 0);
        $views = (int)($item['viewCount'] ?? 0);
        $votes = (int)($item['voteCount'] ?? 0);
        $bytes = (int)($item['totalBytes'] ?? $item['totalBytesNullable'] ?? 0);
        $license = $item['licenseName'] ?? $item['licenseNameNullable'] ?? 'MIT';

        $normalized[] = [
            'slug' => $slug,
            'title' => $title,
            'subtitle' => $subtitle,
            'url' => !empty($url) ? $url : 'https://www.kaggle.com/datasets/engraamirjamil/' . $slug,
            'category' => $cat,
            'tags' => array_slice(array_unique($tags), 0, 3),
            'downloads' => $downloads,
            'views' => $views,
            'votes' => $votes,
            'bytes' => $bytes,
            'license' => $license
        ];
    }

    return $normalized;
}

function kaggle_format_bytes($bytes) {
    if ($bytes <= 0) return 'Data';
    if ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 1) . 'MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 0) . 'KB';
    }
    return $bytes . 'B';
}

$kaggle_datasets = get_kaggle_datasets();

// Compute aggregate metrics
$total_kaggle_datasets = count($kaggle_datasets);
$total_kaggle_views = array_sum(array_column($kaggle_datasets, 'views'));
$total_kaggle_downloads = array_sum(array_column($kaggle_datasets, 'downloads'));
$total_kaggle_upvotes = array_sum(array_column($kaggle_datasets, 'votes'));
?>

<!-- ========================================================================= -->
<!-- Kaggle & Open Datasets Section (Compact 6/Row View)                      -->
<!-- ========================================================================= -->
<section id="kaggle" class="py-14 sm:py-16 bg-gray-50 dark:bg-gray-900 relative overflow-hidden transition-colors duration-300">
    <!-- Ambient Neon Background Glows -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-32 left-1/4 w-96 h-96 bg-cyan-500/10 dark:bg-cyan-500/15 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 right-1/4 w-96 h-96 bg-blue-600/10 dark:bg-blue-600/15 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 opacity-5"
            style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%2320BEFF%22 fill-opacity=%220.15%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="text-center mb-12 sm:mb-14" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-50 dark:bg-cyan-950/70 border border-cyan-200 dark:border-cyan-800/60 text-cyan-700 dark:text-cyan-300 text-xs sm:text-sm font-semibold mb-4 shadow-sm backdrop-blur-sm">
                <!-- Kaggle Icon -->
                <svg class="w-4 h-4 fill-current text-[#20BEFF]" viewBox="0 0 24 24">
                    <path d="M18.825 23.859c-.022.092-.117.141-.281.141h-3.139c-.187 0-.351-.082-.492-.248l-5.178-6.589-1.448 1.374v5.111c0 .235-.117.352-.351.352H5.505c-.236 0-.354-.117-.354-.352V.353c0-.233.118-.353.354-.353h2.431c.234 0 .351.12.351.353v14.343l6.203-6.272c.165-.165.328-.246.494-.246h3.232c.141 0 .225.047.258.143.047.094.025.188-.07.281l-6.883 6.637 7.049 8.358c.094.094.117.188.07.281z" />
                </svg>
                <span>Kaggle Contributor &amp; Open Datasets Hub</span>
                <span class="inline-flex items-center gap-1 text-[11px] px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 font-bold border border-emerald-500/20">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Live Data
                </span>
            </div>

            <h2 class="text-4xl md:text-5xl font-grotesk font-bold mb-4">
                <span class="bg-gradient-to-r from-sky-500 via-cyan-500 to-blue-600 bg-clip-text text-transparent">
                    Kaggle Datasets &amp; AI Research
                </span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Curated open-source machine learning datasets, clean preprocessed real-world data, and NLP corpora published on Kaggle for developers, data scientists, and researchers worldwide.
            </p>
        </div>

        <!-- Bento Profile Spotlight Banner -->
        <div class="mb-10 sm:mb-12 relative z-20" data-aos="fade-up" data-aos-delay="100">
            <div class="bento-card rounded-3xl p-6 sm:p-8 border border-cyan-500/20 dark:border-cyan-500/20 shadow-xl relative overflow-hidden bg-white/70 dark:bg-gray-800/70 backdrop-blur-md">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center relative z-20">
                    
                    <!-- Left: Profile Identity & Follow CTA -->
                    <div class="lg:col-span-7 space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="relative shrink-0">
                                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl p-1 bg-gradient-to-tr from-cyan-400 via-sky-500 to-indigo-600 shadow-md">
                                    <img src="assets/img/navbar.png" alt="Engr. Aamir Jamil Kaggle"
                                        class="w-full h-full object-cover rounded-xl"
                                        loading="lazy" decoding="async" width="80" height="80">
                                </div>
                                <div class="absolute -bottom-1 -right-1 p-1 bg-white dark:bg-gray-900 rounded-lg shadow text-[#20BEFF]" title="Kaggle Creator">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M18.825 23.859c-.022.092-.117.141-.281.141h-3.139c-.187 0-.351-.082-.492-.248l-5.178-6.589-1.448 1.374v5.111c0 .235-.117.352-.351.352H5.505c-.236 0-.354-.117-.354-.352V.353c0-.233.118-.353.354-.353h2.431c.234 0 .351.12.351.353v14.343l6.203-6.272c.165-.165.328-.246.494-.246h3.232c.141 0 .225.047.258.143.047.094.025.188-.07.281l-6.883 6.637 7.049 8.358c.094.094.117.188.07.281z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <h3 class="text-xl sm:text-2xl font-grotesk font-bold text-gray-900 dark:text-white">
                                        Engr. Aamir Jamil
                                    </h3>
                                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-[#20BEFF]/10 text-[#0094d1] dark:text-[#20BEFF] border border-[#20BEFF]/30">
                                        @engraamirjamil
                                    </span>
                                </div>
                                <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1">
                                    Computer System Engineer &bull; Datasets Creator &bull; AI Educator
                                </p>
                            </div>
                        </div>

                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Publishing structured datasets to accelerate machine learning experimentation, NLP research, and predictive modeling for the global community.
                        </p>

                        <!-- Action Buttons (Follow on Kaggle + Browse Datasets) -->
                        <div class="flex flex-wrap items-center gap-3 pt-1 relative z-30">
                            <a href="https://www.kaggle.com/engraamirjamil" target="_blank" rel="noopener noreferrer"
                                onclick="window.open('https://www.kaggle.com/engraamirjamil', '_blank'); return false;"
                                class="inline-flex items-center gap-2.5 px-6 py-3 rounded-xl bg-gradient-to-r from-sky-500 to-cyan-600 text-white font-bold text-sm shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 hover:scale-105 transform transition-all duration-300 cursor-pointer pointer-events-auto select-none">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M18.825 23.859c-.022.092-.117.141-.281.141h-3.139c-.187 0-.351-.082-.492-.248l-5.178-6.589-1.448 1.374v5.111c0 .235-.117.352-.351.352H5.505c-.236 0-.354-.117-.354-.352V.353c0-.233.118-.353.354-.353h2.431c.234 0 .351.12.351.353v14.343l6.203-6.272c.165-.165.328-.246.494-.246h3.232c.141 0 .225.047.258.143.047.094.025.188-.07.281l-6.883 6.637 7.049 8.358c.094.094.117.188.07.281z" />
                                </svg>
                                <span>Follow on Kaggle</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                            <a href="#kaggle-grid"
                                onclick="const el = document.getElementById('kaggle-grid'); if (el) { el.scrollIntoView({ behavior: 'smooth', block: 'start' }); } return false;"
                                class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 font-semibold text-sm hover:bg-gray-200 dark:hover:bg-gray-700 hover:scale-105 transform transition-all duration-300 cursor-pointer pointer-events-auto select-none">
                                <span>Browse <?php echo $total_kaggle_datasets; ?> Datasets</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Stat Chips Grid -->
                    <div class="lg:col-span-5 grid grid-cols-2 gap-3 sm:gap-4">
                        <div class="p-4 rounded-2xl bg-white/70 dark:bg-gray-800/70 border border-gray-100 dark:border-gray-700/60 shadow-sm text-center">
                            <span class="block text-2xl font-grotesk font-bold text-gray-900 dark:text-white">
                                <?php echo $total_kaggle_datasets; ?>+
                            </span>
                            <span class="text-[10px] uppercase font-bold tracking-wider text-gray-500 dark:text-gray-400">
                                Public Datasets
                            </span>
                        </div>
                        <div class="p-4 rounded-2xl bg-white/70 dark:bg-gray-800/70 border border-gray-100 dark:border-gray-700/60 shadow-sm text-center">
                            <span class="block text-2xl font-grotesk font-bold text-sky-600 dark:text-sky-400">
                                <?php echo number_format($total_kaggle_views); ?>+
                            </span>
                            <span class="text-[10px] uppercase font-bold tracking-wider text-gray-500 dark:text-gray-400">
                                Dataset Views
                            </span>
                        </div>
                        <div class="p-4 rounded-2xl bg-white/70 dark:bg-gray-800/70 border border-gray-100 dark:border-gray-700/60 shadow-sm text-center">
                            <span class="block text-2xl font-grotesk font-bold text-indigo-600 dark:text-indigo-400">
                                <?php echo number_format($total_kaggle_downloads); ?>+
                            </span>
                            <span class="text-[10px] uppercase font-bold tracking-wider text-gray-500 dark:text-gray-400">
                                Total Downloads
                            </span>
                        </div>
                        <div class="p-4 rounded-2xl bg-white/70 dark:bg-gray-800/70 border border-gray-100 dark:border-gray-700/60 shadow-sm text-center">
                            <span class="block text-2xl font-grotesk font-bold text-emerald-600 dark:text-emerald-400">
                                100%
                            </span>
                            <span class="text-[10px] uppercase font-bold tracking-wider text-gray-500 dark:text-gray-400">
                                Open &amp; Free (MIT/CC0)
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Filter Tabs & Quick Search in One Sleek Bar -->
        <div id="kaggle-grid" class="mb-5 flex flex-col md:flex-row items-center justify-between gap-3" data-aos="fade-up">
            
            <!-- Category Tabs -->
            <div class="flex flex-wrap items-center justify-center md:justify-start gap-1.5 sm:gap-2">
                <button type="button"
                    class="kaggle-filter-btn active px-3.5 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 bg-gradient-to-r from-sky-500 to-cyan-600 text-white shadow-sm"
                    data-kaggle-filter="all">
                    All (<?php echo $total_kaggle_datasets; ?>)
                </button>
                <button type="button"
                    class="kaggle-filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700 hover:border-cyan-500 dark:hover:border-cyan-400"
                    data-kaggle-filter="ml">
                    Machine Learning
                </button>
                <button type="button"
                    class="kaggle-filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700 hover:border-cyan-500 dark:hover:border-cyan-400"
                    data-kaggle-filter="nlp">
                    NLP &amp; Text
                </button>
                <button type="button"
                    class="kaggle-filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700 hover:border-cyan-500 dark:hover:border-cyan-400"
                    data-kaggle-filter="eda">
                    EDA &amp; Analytics
                </button>
                <button type="button"
                    class="kaggle-filter-btn px-3.5 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700 hover:border-cyan-500 dark:hover:border-cyan-400"
                    data-kaggle-filter="finance">
                    Finance &amp; Risk
                </button>
            </div>

            <!-- Instant Search Input -->
            <div class="relative w-full md:w-64 shrink-0">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </span>
                <input type="text" id="kaggle-search-input"
                    placeholder="Filter datasets..."
                    class="w-full pl-8 pr-8 py-1.5 text-xs rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-cyan-500 transition-all duration-200 shadow-sm">
                <button type="button" id="kaggle-clear-search"
                    class="hidden absolute inset-y-0 right-0 pr-2.5 flex items-center text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Compact Datasets Grid: 6 Columns per Row on Desktop! -->
        <div id="kaggle-datasets-container" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 sm:gap-3.5">
            <?php 
            $cat_colors = [
                'nlp' => 'bg-sky-50 dark:bg-sky-950/70 text-sky-700 dark:text-sky-300 border-sky-200/80 dark:border-sky-800/50',
                'ml' => 'bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border-indigo-200/80 dark:border-indigo-800/50',
                'eda' => 'bg-emerald-50 dark:bg-emerald-950/70 text-emerald-700 dark:text-emerald-300 border-emerald-200/80 dark:border-emerald-800/50',
                'finance' => 'bg-amber-50 dark:bg-amber-950/70 text-amber-700 dark:text-amber-300 border-amber-200/80 dark:border-amber-800/50'
            ];

            foreach ($kaggle_datasets as $idx => $d): 
                $search_meta = strtolower($d['title'] . ' ' . $d['subtitle'] . ' ' . implode(' ', $d['tags']));
                $color_class = $cat_colors[$d['category']] ?? $cat_colors['ml'];
            ?>
            <div class="kaggle-dataset-card group flex flex-col"
                data-category="<?php echo htmlspecialchars($d['category']); ?>"
                data-search="<?php echo htmlspecialchars($search_meta); ?>"
                data-aos="fade-up"
                data-aos-delay="<?php echo min(300, ($idx % 6) * 40); ?>">
                
                <a href="<?php echo htmlspecialchars($d['url']); ?>" target="_blank" rel="noopener noreferrer"
                    class="tilt-card bento-card rounded-2xl overflow-hidden shadow-sm hover:shadow-cyan-500/20 transition-all duration-300 flex flex-col h-full border border-gray-200/70 dark:border-gray-700/70 hover:border-cyan-500/50 bg-white/90 dark:bg-gray-800/90 p-3 text-left group-hover:-translate-y-1 group">
                    <div class="card-glare"></div>
                    <div class="tilt-inner flex flex-col h-full justify-between space-y-2">

                        <!-- Card Top: Category Badge & Size Pill -->
                        <div class="flex items-center justify-between gap-1 text-[10px]">
                            <span class="px-2 py-0.5 rounded-md font-bold uppercase tracking-wider border <?php echo $color_class; ?>">
                                <?php echo strtoupper($d['category']); ?>
                            </span>
                            <span class="text-[10px] font-semibold text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700/60 px-1.5 py-0.5 rounded">
                                <?php echo kaggle_format_bytes($d['bytes']); ?>
                            </span>
                        </div>

                        <!-- Card Middle: Title (2 Lines clamped for uniform height) -->
                        <div>
                            <h3 class="text-xs sm:text-[13px] font-bold font-grotesk text-gray-900 dark:text-white leading-snug line-clamp-2 group-hover:text-cyan-500 dark:group-hover:text-cyan-400 transition-colors">
                                <?php echo htmlspecialchars($d['title']); ?>
                            </h3>
                            
                            <!-- 2 Tags -->
                            <div class="flex flex-wrap gap-1 mt-1.5">
                                <?php foreach (array_slice($d['tags'], 0, 2) as $tag): ?>
                                    <span class="text-[9.5px] px-1 py-0.2 rounded bg-gray-100 dark:bg-gray-700/60 text-gray-500 dark:text-gray-400 truncate max-w-[90px]">
                                        #<?php echo htmlspecialchars($tag); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Card Bottom: Views, Downloads & Arrow -->
                        <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between text-[10.5px] text-gray-500 dark:text-gray-400">
                            <div class="flex items-center gap-2">
                                <span class="flex items-center gap-0.5" title="Views">
                                    <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <?php echo number_format($d['views']); ?>
                                </span>
                                <span class="flex items-center gap-0.5" title="Downloads">
                                    <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    <?php echo number_format($d['downloads']); ?>
                                </span>
                            </div>

                            <span class="text-[#20BEFF] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" title="Open Kaggle Dataset">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </span>
                        </div>

                    </div>
                </a>

            </div>
            <?php endforeach; ?>
        </div>

        <!-- No Results Fallback -->
        <div id="kaggle-no-results" class="hidden text-center py-10 bg-white/50 dark:bg-gray-800/50 rounded-2xl border border-dashed border-gray-300 dark:border-gray-700 mt-4">
            <h4 class="text-sm font-bold text-gray-900 dark:text-white mb-1">No matching datasets</h4>
            <p class="text-xs text-gray-500 dark:text-gray-400 mb-3">Try searching with other keywords like "nlp", "sales", "fraud", or "salary".</p>
            <button type="button" id="kaggle-reset-filters" class="px-4 py-1.5 rounded-lg bg-cyan-600 text-white text-xs font-bold hover:bg-cyan-700 transition-colors">
                Reset Filters
            </button>
        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- Kaggle Section Filter & Search Script                                    -->
<!-- ========================================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.kaggle-filter-btn');
    const searchInput = document.getElementById('kaggle-search-input');
    const clearSearchBtn = document.getElementById('kaggle-clear-search');
    const cards = document.querySelectorAll('.kaggle-dataset-card');
    const noResults = document.getElementById('kaggle-no-results');
    const resetFiltersBtn = document.getElementById('kaggle-reset-filters');

    let currentFilter = 'all';
    let searchQuery = '';

    function applyFilters() {
        let visibleCount = 0;

        cards.forEach(card => {
            const category = card.getAttribute('data-category') || '';
            const searchText = (card.getAttribute('data-search') || '').toLowerCase();

            const matchesCategory = (currentFilter === 'all') || (category === currentFilter);
            const matchesSearch = !searchQuery || searchText.includes(searchQuery);

            if (matchesCategory && matchesSearch) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (visibleCount === 0) {
            if (noResults) noResults.classList.remove('hidden');
        } else {
            if (noResults) noResults.classList.add('hidden');
        }

        if (searchQuery.length > 0) {
            if (clearSearchBtn) clearSearchBtn.classList.remove('hidden');
        } else {
            if (clearSearchBtn) clearSearchBtn.classList.add('hidden');
        }
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            filterButtons.forEach(b => {
                b.classList.remove('active', 'bg-gradient-to-r', 'from-sky-500', 'to-cyan-600', 'text-white', 'shadow-sm');
                b.classList.add('bg-white', 'dark:bg-gray-800', 'text-gray-700', 'dark:text-gray-300', 'border', 'border-gray-200', 'dark:border-gray-700');
            });

            this.classList.remove('bg-white', 'dark:bg-gray-800', 'text-gray-700', 'dark:text-gray-300', 'border', 'border-gray-200', 'dark:border-gray-700');
            this.classList.add('active', 'bg-gradient-to-r', 'from-sky-500', 'to-cyan-600', 'text-white', 'shadow-sm');

            currentFilter = this.getAttribute('data-kaggle-filter') || 'all';
            applyFilters();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            searchQuery = this.value.trim().toLowerCase();
            applyFilters();
        });
    }

    if (clearSearchBtn) {
        clearSearchBtn.addEventListener('click', function () {
            if (searchInput) {
                searchInput.value = '';
                searchQuery = '';
                applyFilters();
                searchInput.focus();
            }
        });
    }

    if (resetFiltersBtn) {
        resetFiltersBtn.addEventListener('click', function () {
            currentFilter = 'all';
            searchQuery = '';
            if (searchInput) searchInput.value = '';

            filterButtons.forEach((b, idx) => {
                if (idx === 0) {
                    b.classList.remove('bg-white', 'dark:bg-gray-800', 'text-gray-700', 'dark:text-gray-300', 'border', 'border-gray-200', 'dark:border-gray-700');
                    b.classList.add('active', 'bg-gradient-to-r', 'from-sky-500', 'to-cyan-600', 'text-white', 'shadow-sm');
                } else {
                    b.classList.remove('active', 'bg-gradient-to-r', 'from-sky-500', 'to-cyan-600', 'text-white', 'shadow-sm');
                    b.classList.add('bg-white', 'dark:bg-gray-800', 'text-gray-700', 'dark:text-gray-300', 'border', 'border-gray-200', 'dark:border-gray-700');
                }
            });

            applyFilters();
        });
    }
});
</script>
