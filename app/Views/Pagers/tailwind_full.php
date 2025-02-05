<?php $pager->setSurroundCount(2) ?>

<ol class="flex justify-center gap-1 text-xs font-medium" aria-label="Page navigation">

    <?php if ($pager->hasPrevious()) : ?>
        <li>
            <a
                href="<?= $pager->getFirst() ?>"
                class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
                aria-label="<?= lang('Pager.first') ?>">
                <span class="sr-only"><?= lang('Pager.first') ?></span>
                <?= lang('Pager.first') ?>
            </a>
        </li>
        <li>
            <a
                href="<?= $pager->getPrevious() ?>"
                aria-label="<?= lang('Pager.previous') ?>"
                class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                <span class="sr-only"><?= lang('Pager.previous') ?></span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-3"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <li>
            <a
                href="<?= $link['uri'] ?>"
                class="block size-8 rounded-sm text-center leading-8 
                <?= $link['active'] ? 'border-blue-600 bg-blue-600 text-white' : 'border border-gray-100 bg-white text-gray-900' ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li>
            <a
                href="<?= $pager->getNext() ?>"
                aria-label="<?= lang('Pager.next') ?>"
                class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                <span class="sr-only"><?= lang('Pager.next') ?></span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-3"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </li>

        <li>
            <a
                href="<?= $pager->getLast() ?>"
                aria-label="<?= lang('Pager.last') ?>"
                class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                <span class="sr-only"><?= lang('Pager.last') ?></span>
                <?= lang('Pager.last') ?>
            </a>
        </li>
    <?php endif ?>
</ol>