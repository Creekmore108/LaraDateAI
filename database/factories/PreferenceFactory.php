<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Preference>
 */
class PreferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement(\App\Models\User::pluck('id')->toArray()),
            'seeking_distance_away' => $this->faker->numberBetween(5,50),
            'seeking_country' => $this->faker->country(),
            'seeking_gender' => $this->faker->randomElement(['male', 'female']),
            'seeking_orientation' => $this->faker->randomElement(['striaght', 'gay', 'bi']),
            'seeking_relationship_type' => $this->faker->randomElement(['long term relationship'.'marriage','tantric partner','polyamorous','open relationship','casual intimacy','friends','travel companion','pen pals', 'just curious']),
            'seeking_vaccinated' => $this->faker->boolean(),
            'seeking_myers_briggs' => $this->faker->randomElement(['ENFP','ESFJ','INFJ','ISTJ','INTP']),
            'seeking_disc' => $this->faker->randomElement(['D','S','I','C']),
            'seeking_enneagram' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9']),
            'seeking_body_type' => $this->faker->randomElement(['slim/slender', 'average/medium', 'a few extra pounds', 'muscular/athletic','curvy','voluptuous','big and beautiful','stocky','large','extra large','disabled','prefer to not say']),
            'seeking_hair_color' => $this->faker->randomElement(['blonde', 'strawberry blonde', 'dark blonde', 'brown','light brown','dark brown','auburn/red','black','silver','grey','white','salt and pepper','multi-colored','no hair']),
            'seeking_hair_style' => $this->faker->randomElement(['Short Straight','Medium Straight','Long Straight','Short Curly/Wavy','Long Curly/Wavy','Shaved Close','Locks','No Hair','Pleasantly Sparse']),
            'seeking_eye_color' => $this->faker->randomElement(['blue', 'green', 'brown', 'haxel', 'gray']),
            'seeking_ethnicity' => $this->faker->randomElement(['Black', 'Asian', 'White', 'Indian', 'Hispanic/Latino','Middle Eastern','Native American','Pacific Islander','Mutli Ethnic','Other']),
            'seeking_exercise' => $this->faker->randomElement(['Exercise fanatic', 'Daily', '3-6 days/week', '1-2 days/week', 'Never']),
            'seeking_political_views' => $this->faker->randomElement(['Nonconformist','Sovereign', 'Social Anarchist', 'Libertarian','Very Liberal','Liberal','Moderate','Conservative','Ultra Conservative','Not Political','Other Views']),
            'seeking_education' => $this->faker->randomElement(['Some High School', 'High School', 'Trade School', 'Some College','Associate Degree','Bachelors Degree','Master Degree','PhD','Student','Doesn\'t Matter']),
            'seeking_have_children' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_want_children' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_energy_level' => $this->faker->randomElement(['Hyper','High', 'Average','Low','Couch Potato','Doesn\'t Matter']),
            'seeking_tobacco' => $this->faker->randomElement(['I don\'t smoke', 'I smoke socially', 'I smoke cigars', 'I smoke an occassional cigar','I smoke daily','I vape','I chew tobacco','Ceremonially','I\'m trying to quit']),
            'seeking_weed' => $this->faker->randomElement(['No Marijuana for me','I\'m 420 friendly','Edibles Only','Occasionally','I\'m a connoisseur','Medical purposes','Medical & Recreational','Wake & Bake']),
            'seeking_alcohol' => $this->faker->randomElement(['I don\'t drink', 'I rarely drink', 'I drink occasionally', 'I drik socially','I drink daily']),
            'seeking_dietary_preference' => $this->faker->randomElement(['Mostly Plant Based','Vegan','Raw Vegan','Plant Based','Vegetarian','Mostly Vegetarian','Omnivore','Paleo','Carnivore','Mostly Carnivore','Eat Right 4 Your Type','Gluten Free','Ketogenic','Macrobiotic','Pescetarian','No Red Meat','Ayurvedic','Kosher','Raw Foods Only','Mostly Raw Food','Juice Diet','Fruitarian','Breatharian','I Eat Anything']),
            'seeking_spiritual_belief' => $this->faker->randomElement(['Personal Spiritual Path', 'Conscious/Spiritual', 'New Thought', 'Self Relization Fellowship','Baha\'i','Advaita','Humanism','Native American','Rastafarian','Eastern Philosophy','Buddhism','Taoism','Falun Gong','Hinduism','Sufism','Sikh','Religious Science','Unitarian/Universalist','Eckankar','Paganism','Gnosticism','Jewish/Spiritual','Jewish','Christian/Spiritual','Christian','Catholic/Spiritual','Catholic','Muslim','Scientology','Agnostic','Atheist','Other']),
            'seeking_marital_status' => $this->faker->randomElement(['Single','Divorced','Separated','Widowed','In an open relationship','In a relationship','Married']),
            'seeking_spoken_language' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_living_situation' => $this->faker->randomElement(['I live alone', 'I live with roomate(s)', 'My kids live with me full-time','My kids live eith me part-time','I live with parents','My parents live with me','Intentional Community','Community Living','I travel most or all of the time','I live with my spouse','I live with my partner','Other']),
            'seeking_willing_to_relocate' => $this->faker->randomElement(['Yes', 'No', 'Maybe']),
            'seeking_sun_sign' => $this->faker->randomElement(['Aries', 'Taurus', 'Gemini', 'Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces','Not Sure','Don\'t Believe']),
            'seeking_rising_sign' => $this->faker->randomElement(['Aries', 'Taurus', 'Gemini', 'Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces','Not Sure','Don\'t Believe']),
            'seeking_moon_sign' => $this->faker->randomElement(['Aries', 'Taurus', 'Gemini', 'Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces','Not Sure','Don\'t Believe']),
            'seeking_chinese_sign' => $this->faker->randomElement(['Rat', 'Ox', 'Tiger', 'Rabbit','Dragon','Snake','Horse','Goat','Monkey','Rooster','Dog','Pig','Not Sure','Don\'t Believe']),
            'seeking_ayurvedic_body_type' => $this->faker->randomElement(['Kapha', 'Kapha/Pitta', 'Kapha/Vatta', 'Pitta','Pitta/Kapha','Pitta/Vatta','Vatta','Vatta/Kapha','Vatta/Pitta','Tri-doshic','Not Sure','Doesn\'t Matter']),
            'seeking_occupation' => $this->faker->randomElement(['Sales','Management','Science','Technology','Entrepreneur','Administration','Labor','Retail']),
            'seeking_pets' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_like_pets' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_income' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_personality' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_interests' => $this->faker->randomElement(['User', 'Company', 'Operator', 'Admin']),
            'seeking_age_min' => $this->faker->numberBetween(18,45),
            'seeking_age_max' => $this->faker->numberBetween(18,65),
            'seeking_height_min' => $this->faker->numberBetween(4,5),
            'seeking_height_max' => $this->faker->numberBetween(5,6),
            'seeking_weight_min' => $this->faker->numberBetween(100,150),
            'seeking_weight_max' => $this->faker->numberBetween(110,200),
        ];
    }
}
