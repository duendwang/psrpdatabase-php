<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingUserMeal $trainingUserMeal
 * @var \Cake\Collection\CollectionInterface|string[] $trainingUsers
 * @var \Cake\Collection\CollectionInterface|string[] $meals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Training User Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingUserMeals form content">
            <?= $this->Form->create($trainingUserMeal) ?>
            <fieldset>
                <legend><?= __('Add Training User Meal') ?></legend>
                <?php
                    echo $this->Form->control('training_user_id', ['options' => $trainingUsers]);
                    echo $this->Form->control('meal_id', ['options' => $meals]);
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
