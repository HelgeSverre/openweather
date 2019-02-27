<?php

namespace bolden\openweather\migrations;

use craft\db\Migration;

/**
 * m190227_163140_add_weather_description_column migration.
 */
class m190227_163140_add_weather_description_column extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn("{{%open_weather_entries}}", 'weather_description', $this->string(55));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn("{{%open_weather_entries}}", "weather_description");
    }
}
