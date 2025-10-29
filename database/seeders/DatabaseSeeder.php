<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(CredentialsTableSeeder::class);
        $this->call(SiteSettingsTableSeeder::class);
        $this->call(ACRatingsTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(ActivityLogTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CacheTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ClassificationsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CopyrightTableSeeder::class);
        $this->call(CopyrightsTableSeeder::class);
        $this->call(EmailSettingsTableSeeder::class);
        $this->call(ExtrasTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(HowsTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(PasswordResetTokensTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(PostViewsTableSeeder::class);
        $this->call(PrivaciesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RatesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(SpeciesTableSeeder::class);
        $this->call(SubClassificationsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(ThicknessesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VariationsTableSeeder::class);
        $this->call(WarrantiesTableSeeder::class);
        $this->call(WatersTableSeeder::class);
        $this->call(ProExcelTableSeeder::class);
        $this->call(ReverseTransactionTableSeeder::class);
    }
}
