<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
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
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zip' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            'birthday' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'gender' =>  $this->faker->randomElement(['male', 'female']),
            'orientation' => $this->faker->randomElement(['Straight','Bi-sexual','Gay']),
            'vaccinated' => $this->faker->boolean(),
            'myers_briggs' => $this->faker->randomElement(['ENFP','ESFJ','INFJ','ISTJ','INTP']),
            'disc' => $this->faker->randomElement(['D','I','S','C']),
            'enneagram' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9']),
            'active' => 1,
            'visible' => 1,
            'height' => $this->faker->numberBetween(5,6),
            'weight' =>  '100',
            'body_type' => $this->faker->randomElement(['slim/slender', 'average/medium', 'a few extra pounds', 'muscular/athletic','curvy','voluptuous','big and beautiful','stocky','large','extra large','disabled','prefer to not say']),
            'hair_color' => $this->faker->randomElement(['blonde','red head','brunette','black','gray','white']),
            'hair_style' => $this->faker->randomElement(['Short Straight','Medium Straight','Long Straight','Short Curly/Wavy','Long Curly/Wavy','Shaved Close','Locks','No Hair','Pleasantly Sparse']),
            'eye_color'  => $this->faker->randomElement(['blue','green','brown','hazel','gray']),
            'use_eyewear' => $this->faker->randomElement(['glasses','contacts', 'none']),
            'ethnicity' =>  $this->faker->randomElement(['Black', 'Asian', 'White', 'Indian', 'Hispanic/Latino','Middle Eastern','Native American','Pacific Islander','Mutli Ethnic','Other']),
            'exercise' => $this->faker->randomElement(['Exercise fanatic', 'Daily', '3-6 days/week', '1-2 days/week', 'Never']),
            'political_views' => $this->faker->randomElement(['Nonconformist','Sovereign', 'Social Anarchist', 'Libertarian','Very Liberal','Liberal','Moderate','Conservative','Ultra Conservative','Not Political','Other Views']),
            'education' => $this->faker->randomElement(['Some High School', 'High School', 'Trade School', 'Some College','Associate Degree','Bachelors Degree','Master Degree','PhD','Student','Doesn\'t Matter']),
            'have_children' => $this->faker->randomElement(['1','0']),
            'want_children' => $this->faker->randomElement(['Y','N','Maybe']),
            'energy_level' => $this->faker->randomElement(['Hyper','High', 'Average','Low','Couch Potato','Doesn\'t Matter']),
            'tobacco' => $this->faker->randomElement(['I don\'t smoke', 'I smoke socially', 'I smoke cigars', 'I smoke an occassional cigar','I smoke daily','I vape','I chew tobacco','Ceremonially','I\'m trying to quit']),
            'weed' => $this->faker->randomElement(['No Marijuana for me','I\'m 420 friendly','Edibles Only','Occasionally','I\'m a connoisseur','Medical purposes','Medical & Recreational','Wake & Bake']),
            'alcohol' => $this->faker->randomElement(['I don\'t drink', 'I rarely drink', 'I drink occasionally', 'I drik socially','I drink daily']),
            'dietary_preference' => $this->faker->randomElement(['Mostly Plant Based','Vegan','Raw Vegan','Plant Based','Vegetarian','Mostly Vegetarian','Omnivore','Paleo','Carnivore','Mostly Carnivore','Eat Right 4 Your Type','Gluten Free','Ketogenic','Macrobiotic','Pescetarian','No Red Meat','Ayurvedic','Kosher','Raw Foods Only','Mostly Raw Food','Juice Diet','Fruitarian','Breatharian','I Eat Anything']),
            'spiritual_belief' => $this->faker->randomElement(['Personal Spiritual Path', 'Conscious/Spiritual', 'New Thought', 'Self Relization Fellowship','Baha\'i','Advaita','Humanism','Native American','Rastafarian','Eastern Philosophy','Buddhism','Taoism','Falun Gong','Hinduism','Sufism','Sikh','Religious Science','Unitarian/Universalist','Eckankar','Paganism','Gnosticism','Jewish/Spiritual','Jewish','Christian/Spiritual','Christian','Catholic/Spiritual','Catholic','Muslim','Scientology','Agnostic','Atheist','Other']),
            'marital_status' => $this->faker->randomElement(['Single','Divorced','Separated','Widowed','In an open relationship','In a relationship','Married']),
            'spoken_language' => $this->faker->randomElement(['English','Spanish','Arabic','Bulgarian','Chinese','Czech','Dutch','French','Greek','German','Hebrew','Hindi','Italian','Japanese','Korean','Polish','Portuguese','Punjabi','Russian','Turkish','Urdu','Other']),
            'living_situation' => $this->faker->randomElement(['I live alone', 'I live with roomate(s)', 'My kids live with me full-time','My kids live eith me part-time','I live with parents','My parents live with me','Intentional Community','Community Living','I travel most or all of the time','I live with my spouse','I live with my partner','Other']),
            'willing_to_relocate' => $this->faker->randomElement(['Yes', 'No', 'Maybe']),
            'sun_sign' => $this->faker->randomElement(['Aries', 'Taurus', 'Gemini', 'Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces','Not Sure','Don\'t Believe']),
            'rising_sign' => $this->faker->randomElement(['Aries', 'Taurus', 'Gemini', 'Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces','Not Sure','Don\'t Believe']),
            'moon_sign' => $this->faker->randomElement(['Aries', 'Taurus', 'Gemini', 'Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces','Not Sure','Don\'t Believe']),
            'chinese_sign' => $this->faker->randomElement(['Rat', 'Ox', 'Tiger', 'Rabbit','Dragon','Snake','Horse','Goat','Monkey','Rooster','Dog','Pig','Not Sure','Don\'t Believe']),
            'ayurvedic_body_type' => $this->faker->randomElement(['Kapha', 'Kapha/Pitta', 'Kapha/Vatta', 'Pitta','Pitta/Kapha','Pitta/Vatta','Vatta','Vatta/Kapha','Vatta/Pitta','Tri-doshic','Not Sure','Doesn\'t Matter']),
            'occupation' => $this->faker->randomElement(['Sales','Management','Science','Technology','Entrepreneur','Administration','Labor','Retail']),
            'pets' => $this->faker->randomElement(['']),
            'like_pets' => $this->faker->randomElement(['']),
            'income' => $this->faker->randomElement(['']),
            'headline' => $this->faker->sentence(),
            'about' => $this->faker->paragraph(),
            'personality' => $this->faker->paragraph(),
            'interests' => $this->faker->paragraph(),
            'desc_yourself' => $this->faker->paragraph(),
            'desc_your_interested_in' => $this->faker->paragraph(),
            'desc_ideal_relationship' => $this->faker->paragraph(),
            'anything_else' => $this->faker->paragraph(),
            'seen' => $this->faker->randomElement(['102','100','101','134','121','132','133']),

        ];
    }
}
