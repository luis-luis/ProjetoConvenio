// Função para avançar para a próxima etapa
function nextStep(step) {
    const currentStep = document.querySelector('.step:not([style*="display: none"])');
    const nextStep = document.getElementById(`step${step}`);

    // Adiciona efeito de loading
    currentStep.style.display = 'none';
    nextStep.style.display = 'block';

    // Atualiza os dados na etapa de confirmação
    if (step === 3) {
        const plano = document.querySelector('input[name="plano"]:checked').nextSibling.textContent.trim();
        const metodo = document.querySelector('input[name="metodo_pagamento"]:checked')?.nextSibling.textContent.trim();
        document.getElementById('planoSelecionado').textContent = plano || 'Não selecionado';
        document.getElementById('metodoSelecionado').textContent = metodo || 'Não selecionado';
    }
}

// Função para voltar para a etapa anterior
function prevStep(step) {
    const currentStep = document.querySelector('.step:not([style*="display: none"])');
    const prevStep = document.getElementById(`step${step}`);
    currentStep.style.display = 'none';
    prevStep.style.display = 'block';
}

// Função para submeter o formulário
function submitForm(redirectUrl = null) {
    // If redirectUrl provided, redirect instead of submitting (for testing)
    if (redirectUrl) {
        window.location.href = redirectUrl;
        return;
    }
    const form = document.getElementById('mainForm');
    if (form) {
        form.submit();
    }
}

function nextStep(step) {
    // Mostra o spinner
    document.getElementById('loadingSpinner').style.display = 'flex';

    setTimeout(function () {
        // Esconde a etapa atual
        const currentStep = document.querySelector('.step:not([style*="display: none"])');
        // If the user requested to go to confirmation (step 3) but payment method is card, show step4 first
        let targetStep = step;
        if (step === 3) {
            const metodo = document.querySelector('input[name="metodo_pagamento"]:checked')?.value;
            if (metodo === 'cartao' && document.getElementById('step4')) {
                targetStep = 4;
            }
        }
        const nextStep = document.getElementById(`step${targetStep}`);
        currentStep.style.display = 'none';
        nextStep.style.display = 'block';

        // Atualiza os dados na etapa de confirmação
        if (targetStep === 3) {
            const planoInput = document.querySelector('input[name="plano"]:checked');
            const metodoInput = document.querySelector('input[name="metodo_pagamento"]:checked');
            const plano = planoInput ? planoInput.closest('label').textContent.trim() : 'Não selecionado';
            const metodo = metodoInput ? metodoInput.closest('label').textContent.trim() : 'Não selecionado';
            document.getElementById('planoSelecionado').textContent = plano || 'Não selecionado';
            document.getElementById('metodoSelecionado').textContent = metodo || 'Não selecionado';
        }

        // Esconde o spinner
        document.getElementById('loadingSpinner').style.display = 'none';
    }, 1000); // 1 segundo de loading
}

function prevStep(step) {
    // Mostra o spinner
    document.getElementById('loadingSpinner').style.display = 'flex';

    setTimeout(function () {
        // Esconde a etapa atual
        const currentStep = document.querySelector('.step:not([style*="display: none"])');
        const prevStep = document.getElementById(`step${step}`);
        currentStep.style.display = 'none';
        prevStep.style.display = 'block';

        // Esconde o spinner
        document.getElementById('loadingSpinner').style.display = 'none';
    }, 1000); // 1 segundo de loading
}

// No need for inline cardForm show/hide; we use a dedicated step (step4) for card data.